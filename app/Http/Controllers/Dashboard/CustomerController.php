<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Customer;
use App\Models\Marketeer;
use Illuminate\Http\Request;
use App\Mail\SendOrderDataMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Dashboard\Customer\StoreRequest;
use App\Http\Requests\Dashboard\Customer\UpdateRequest;
use App\Http\Requests\Dashboard\Customer\StoreFromWebRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = Customer::when($request->filled('marketeer'), function ($q) use ($request) {
            $q->whereHas('marketeer', function ($q2) use ($request) {
                $q2->where('code', $request->marketeer);
            });
        })->get();

        return view('dashboard.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Customer::create($request->validated());
        return redirect()->route('dashboard.customer.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeFromWeb(StoreFromWebRequest $request)
    {
        $marketeer =  Marketeer::whereCode($request->marketeer_code)->first();

        Customer::create(['marketeer_id' => $marketeer->id ?? null] + $request->validated());

        $mailData = [
            'full_name'    => $request->name,
            'phone_number' => $request->phone,
            'email'        => $request->email,
            'service'      => $request->service,
            'msg'          => $request->desc,
        ];

        Mail::to('hatfpfp@gmail.com')->send(new SendOrderDataMail($mailData));

        return response()->json(['message' => 'تم ارسال الخدمة بنجاح']);
    }


    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
