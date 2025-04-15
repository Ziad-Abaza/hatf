<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\OurTeam;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\OurTeam\StoreRequest;
use App\Http\Requests\Dashboard\OurTeam\UpdateRequest;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourTeams = OurTeam::get();
        return view('dashboard.ourteam.index', compact('ourTeams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ourteam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        OurTeam::create(['image' => $imageName] + $request->validated());
        return redirect()->route('dashboard.our-team.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OurTeam $ourTeam)
    {
        return view('dashboard.ourteam.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurTeam $ourTeam)
    {
        return view('dashboard.ourteam.edit', compact('ourTeam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, OurTeam $ourTeam)
    {
        $imageName = $ourTeam->image;

        if ($request->image) {
            $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);

            if (Storage::exists('public/images/' . $ourTeam->image)) {
                Storage::delete('public/images/' . $ourTeam->image);
            }
        }

        $ourTeam->update(['image' => $imageName] + $request->validated());
        return redirect()->route('dashboard.our-team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurTeam $ourTeam)
    {
        $ourTeam->delete();
        if (Storage::exists('public/images/' . $ourTeam->image)) {
            Storage::delete('public/images/' . $ourTeam->image);
        }

        return redirect()->route('dashboard.our-team.index');
    }
}
