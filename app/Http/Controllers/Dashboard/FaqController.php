<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Faq;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Faq\StoreRequest;
use App\Http\Requests\Dashboard\Faq\UpdateRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::get();
        return view('dashboard.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Faq::create($request->validated());
        return redirect()->route('dashboard.faq.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        return view('dashboard.faq.edit', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('dashboard.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Faq $faq)
    {
        $faq->update($request->validated());
        return redirect()->route('dashboard.faq.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('dashboard.faq.index');
    }
}
