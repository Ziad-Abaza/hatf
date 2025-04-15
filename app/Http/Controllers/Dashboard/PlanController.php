<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\Plan\StoreRequest;
use App\Http\Requests\Dashboard\Plan\UpdateRequest;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::get();
        return view('dashboard.plan.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        Plan::create(['image' => $imageName]);
        return redirect()->route('dashboard.plan.index')->with('success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('dashboard.plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Plan $plan)
    {
        $imageName = $plan->image;

        if ($request->image) {
            $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);

            if (Storage::exists('public/images/' . $plan->image)) {
                Storage::delete('public/images/' . $plan->image);
            }
        }

        $plan->update(['image' => $imageName]);
        return redirect()->route('dashboard.plan.index')->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        if (Storage::exists('public/images/' . $plan->image))
            Storage::delete('public/images/' . $plan->image);

        return redirect()->route('dashboard.plan.index')->with('success', 'تم الحذق بنجاح');
    }
}
