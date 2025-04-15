<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package=Package::all();
        return view('dashboard.packages.index',compact("package"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('dashboard.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageRequest $request)
    {
        if ($request->hasFile('image')) {
            $imageName =  uniqid() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
        } else {
            $imageName = '';
        }
        Package::create(['image' => $imageName ?? ''] + $request->validated());
        
        return redirect()->route('dashboard.packages.index')->with('success',"تم اضاقة بنجاح");
        
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('dashboard.packages.edit',['package'=>$package]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        if ($request->hasFile('image')) {
            $currentImage = $package->image;
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
                if ($currentImage && Storage::exists('public/images/' . $currentImage)) {
                Storage::delete('public/images/' . $currentImage);
            }
        } else {
            $imageName = $package->image;
        }
    
        $package->update(['image' => $imageName] + $request->validated());
        
        return redirect()->route('dashboard.packages.index')->with('success',"تم تعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('dashboard.packages.index')->with('success',"تم حذف بنجاح");
        
    }
}
