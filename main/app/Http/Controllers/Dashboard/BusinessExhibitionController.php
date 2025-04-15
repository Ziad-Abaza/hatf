<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\BusinessExhibition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\BusinessExhibition\StoreRequest;
use App\Http\Requests\Dashboard\BusinessExhibition\UpdateRequest;

class BusinessExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businessExhibitions = BusinessExhibition::get();
        return view('dashboard.businessExhibition.index', compact('businessExhibitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.businessExhibition.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        BusinessExhibition::create(['image' => $imageName] + $request->validated());
        return redirect()->route('dashboard.business.exhibition.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BusinessExhibition $businessExhibition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessExhibition $businessExhibition)
    {
        return view('dashboard.businessExhibition.edit', compact('businessExhibition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, BusinessExhibition $businessExhibition)
    {
        $imageName = $businessExhibition->image;

        if ($request->image) {
            $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);

            if (Storage::exists('public/images/' . $businessExhibition->image)) {
                Storage::delete('public/images/' . $businessExhibition->image);
            }
        }

        $businessExhibition->update(['image' => $imageName] + $request->validated());
        return redirect()->route('dashboard.business.exhibition.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessExhibition $businessExhibition)
    {
        $businessExhibition->delete();

        if (Storage::exists('public/images/' . $businessExhibition->image)) {
            Storage::delete('public/images/' . $businessExhibition->image);
        }

        return redirect()->route('dashboard.business.exhibition.index');
    }
}
