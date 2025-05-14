<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Section\UpdateRequest;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section = Section::first();
        return view('dashboard.section.index', compact('section'));
    }
    public function edit(Section $section)
    {
        return view('dashboard.section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Section $section)
    {
        $data = [];

        if ($request->header) {
            $header = date('Y-m-d') . '_' . uniqid() . '.' . $request->header->extension();
            $request->header->storeAs('public/images', $header);
            $data['header'] = $header;
        }

        if ($request->about) {
            $about = date('Y-m-d') . '_' . uniqid() . '.' . $request->about->extension();
            $request->about->storeAs('public/images', $about);
            $data['about'] = $about;
        }

        if ($request->services) {
            $services = date('Y-m-d') . '_' . uniqid() . '.' . $request->services->extension();
            $request->services->storeAs('public/images', $services);
            $data['services'] = $services;
        }

        if ($request->business_show) {
            $business_show = date('Y-m-d') . '_' . uniqid() . '.' . $request->business_show->extension();
            $request->business_show->storeAs('public/images', $business_show);
            $data['business_show'] = $business_show;
        }

        if ($request->success_partners) {
            $success_partners = date('Y-m-d') . '_' . uniqid() . '.' . $request->success_partners->extension();
            $request->success_partners->storeAs('public/images', $success_partners);
            $data['success_partners'] = $success_partners;
        }

        $section->update($data);
        return redirect()->route('dashboard.section.index');
    }
   
}
