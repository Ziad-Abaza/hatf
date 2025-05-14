<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Footer\UpdateRequest;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::first();
        return view('dashboard.footer.index', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        return view('dashboard.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Footer $footer)
    {
        $footer->update($request->validated());
        return redirect()->route('dashboard.footer.index');
    }
}
