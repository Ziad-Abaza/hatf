<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');

        if ($startDate && $endDate) {
            $startDate = Carbon::parse($startDate);
            $endDate = Carbon::parse($endDate)->endOfDay();
        } else {
            $startDate = Carbon::now()->subMonths(1);
            $endDate = Carbon::now()->endOfDay();
        }

        $baseQuery = Payment::whereBetween('created_at', [$startDate, $endDate]);

        $totalInvoices = $baseQuery->count();
        $totalAmount = $baseQuery->sum('amount');

        $successfulPayments = (clone $baseQuery)->where('status', '1')->count();
        $failedPayments = (clone $baseQuery)->where('status', '0')->count();
        $totalPaidAmount = (clone $baseQuery)->where('status', '1')->sum('amount');

        $latestInvoices = (clone $baseQuery)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('dashboard.invoices.index', compact(
            'totalInvoices',
            'totalAmount',
            'successfulPayments',
            'failedPayments',
            'totalPaidAmount',
            'latestInvoices',
            'startDate',
            'endDate'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countInvoices = Payment::count();
        if (!$countInvoices) {
            $nextInvoice = '001'; // Start sequence from 001
        } else {
            $nextInvoice = str_pad($countInvoices + 1, 3, '0', STR_PAD_LEFT); // Increment and pad with zeros
        }

        $formattedDate = \Carbon\Carbon::now()->format('Ymd');
        $yearWithout20 = substr($formattedDate, 2);

        $invoiceNumber = $yearWithout20  . $nextInvoice;
        return view('dashboard.invoices.create', ['invoiceNumber' => $invoiceNumber]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        $uniqid = uniqid();
        $request = [
            'uniqid' => $uniqid,
            'amount' => $request->amount,
            'expenses' => $request->expenses,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service' => $request->service,
            'invoice_number' => $request->invoice_number,

        ];
        Payment::create($request);

        return redirect()->route('dashboard.invoices.index')->with('success', 'تم اضافة فاتورة بنجاح');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($payment)
    {
        $payment = Payment::findOrFail($payment);
        return view('dashboard.invoices.edit', ['invoice' => $payment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, $payment)
    {
        Payment::where('id', $payment)->update($request->validated());
        return redirect()->route('dashboard.invoices.index')->with('success', 'تم  تعديل فاتورة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $invoice)
    {
        $invoice->delete();
        return redirect()->route('dashboard.invoices.index')->with('success', 'تم حذف فاتورة بنجاح');
    }


    public function replicateInvoice($id)
    {
        $originalInvoice = Payment::findOrFail($id);

        $newInvoice = $originalInvoice->replicate([
            'created_at',
            'updated_at',
            'uniqid',
            'transaction_number',
            'status'
        ]);

        $newInvoice->invoice_number = $this->generateNewInvoiceNumber();

        $newInvoice->created_at = now();
        $newInvoice->updated_at = now();
        $newInvoice->uniqid = uniqid();
        $newInvoice->transaction_number = null;
        // $newInvoice->status = 0;

        $newInvoice->save();

        return redirect()->route('dashboard.invoices.index')->with('success', 'تم نسخ الفاتورة بنجاح');
    }


    private function generateNewInvoiceNumber()
    {
        $countInvoices = Payment::count() + 1;
        $nextInvoice = str_pad($countInvoices, 3, '0', STR_PAD_LEFT);
        $formattedDate = \Carbon\Carbon::now()->format('Ymd');
        $yearWithout20 = substr($formattedDate, 2);

        return $yearWithout20 . $nextInvoice;
    }
}
