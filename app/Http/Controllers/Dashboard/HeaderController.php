<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Header\UpdateRequest;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::first();
        return view('dashboard.header.index', compact('header'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        return view('dashboard.header.edit', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Header $header)
    {
        $header->update($request->validated());
        return redirect()->route('dashboard.our-team.index');
    }
}
