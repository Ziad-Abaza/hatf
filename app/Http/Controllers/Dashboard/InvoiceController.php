<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

        // تعريف المتغيرات مسبقًا
        $startDateFirstWeek = Carbon::now()->startOfWeek();
        $endDateForWeek = Carbon::now()->endOfDay();

        if ($startDate && $endDate) {
            $startDate = Carbon::parse($startDate);
            $endDate = Carbon::parse($endDate)->endOfDay();
        } else {
            $startDate = Carbon::now()->startOfMonth();
            $endDate = Carbon::now()->endOfDay();
        }

        // الآن يتم استخدام المتغيرات بشكل آمن
        $baseQuery = Payment::whereBetween('created_at', [$startDate, $endDate]);
        $baseQueryByWeek = Payment::whereBetween('created_at', [$startDateFirstWeek, $endDateForWeek]);

        $totalInvoices = $baseQuery->count();
        $totalInvoicesByWeek = $baseQueryByWeek->count();
        $totalAmount = $baseQuery->sum('amount');
        $totalAmountByWeek = $baseQueryByWeek->sum('amount');

        $successfulPayments = (clone $baseQuery)->where('status', '1')->count();
        $successfulPaymentsByWeek = (clone $baseQueryByWeek)->where('status', '1')->count();
        $failedPayments = (clone $baseQuery)->where('status', '0')->count();
        $failedPaymentsByWeek = (clone $baseQueryByWeek)->where('status', '0')->count();
        $totalPaidAmount = (clone $baseQuery)->where('status', '1')->sum('amount');
        $totalPaidAmountByWeek = (clone $baseQueryByWeek)->where('status', '1')->sum('amount');

        $latestInvoices = Payment::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.invoices.index', compact(
            'totalInvoices',
            'totalInvoicesByWeek',
            'totalAmount',
            'totalAmountByWeek',
            'successfulPayments',
            'successfulPaymentsByWeek',
            'failedPayments',
            'failedPaymentsByWeek',
            'totalPaidAmount',
            'totalPaidAmountByWeek',
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
        $now = Carbon::now();
        $yearDigit = substr($now->year, -1);
        $month = str_pad($now->month, 2, '0', STR_PAD_LEFT);
        $day = str_pad($now->day, 2, '0', STR_PAD_LEFT);
        $prefix = "{$yearDigit}{$month}{$day}";

        $countToday = Payment::whereDate('created_at', $now->toDateString())->count();
        $nextInvoice = str_pad($countToday + 1, 3, '0', STR_PAD_LEFT);

        $invoiceNumber = $prefix . $nextInvoice;

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

    /**
     * Mark an invoice as paid via external transfer
     */
    public function markAsPaid($id)
    {
        $payment = Payment::findOrFail($id);

        $payment->update([
            'status' => '1',
            'transaction_number' => null,
        ]);
        Log::info('Invoice marked as paid', [
            'invoice_id' => $payment->id,
            'transaction_number' => null,
            'status' => Payment::find($id)->status,
        ]);

        return redirect()->back()->with('success', 'تم تعليم الفاتورة كمدفوعة بنجاح');
    }

    private function generateNewInvoiceNumber()
    {
        $now = Carbon::now();
        $yearDigit = substr($now->year, -1);
        $month = str_pad($now->month, 2, '0', STR_PAD_LEFT);
        $day = str_pad($now->day, 2, '0', STR_PAD_LEFT);
        $prefix = "{$yearDigit}{$month}{$day}";

        $countToday = Payment::whereDate('created_at', $now->toDateString())->count();
        $nextInvoice = str_pad($countToday + 1, 3, '0', STR_PAD_LEFT);

        return $prefix . $nextInvoice;
    }
}
