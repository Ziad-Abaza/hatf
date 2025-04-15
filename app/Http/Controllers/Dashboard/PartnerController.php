<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\Partner\StoreRequest;
use App\Http\Requests\Dashboard\Partner\UpdateRequest;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::get();
        return view('dashboard.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        Partner::create(['image' => $imageName]);
        return redirect()->route('dashboard.partner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('dashboard.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Partner $partner)
    {
        $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        if (Storage::exists('public/images/' . $partner->image)) {
            Storage::delete('public/images/' . $partner->image);
        }

        $partner->update(['image' => $imageName]);

        return redirect()->route('dashboard.partner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        if (Storage::exists('public/images/' . $partner->image)) {
            Storage::delete('public/images/' . $partner->image);
        }
        return redirect()->route('dashboard.partner.index');
    }
}
