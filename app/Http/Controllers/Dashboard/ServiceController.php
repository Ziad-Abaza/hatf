<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\Service\StoreRequest;
use App\Http\Requests\Dashboard\Service\UpdateRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();
        return view('dashboard.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        $iconNumberName = date('Y-m-d') . '_' . uniqid() . '.' . $request->icon_number->extension();
        $request->icon_number->storeAs('public/images', $iconNumberName);

        Service::create(['image' => $imageName, 'icon_number' => $iconNumberName] + $request->validated());
        return redirect()->route('dashboard.service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('dashboard.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Service $service)
    {
        $imageName           = $service->image;
        $iconNumberImageName = $service->icon_number;

        if ($request->image) {
            $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);

            if (Storage::exists('public/images/' . $service->image)) {
                Storage::delete('public/images/' . $service->image);
            }
        }

        if ($request->icon_number) {
            $iconNumberImageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->icon_number->extension();
            $request->icon_number->storeAs('public/images', $iconNumberImageName);

            if (Storage::exists('public/images/' . $service->icon_number)) {
                Storage::delete('public/images/' . $service->icon_number);
            }
        }

        $service->update(['image' => $imageName, 'icon_number' => $iconNumberImageName] + $request->validated());
        return redirect()->route('dashboard.service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        if (Storage::exists('public/images/' . $service->image))
            Storage::delete('public/images/' . $service->image);

        if (Storage::exists('public/images/' . $service->icon_number))
            Storage::delete('public/images/' . $service->icon_number);

        return redirect()->route('dashboard.service.index');
    }
}
