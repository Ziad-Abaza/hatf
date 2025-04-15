<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Marketeer;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Marketeer\StoreRequest;
use App\Http\Requests\Dashboard\Marketeer\UpdateRequest;

class MarketeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marketeers = Marketeer::get();
        return view('dashboard.marketeer.index', compact('marketeers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.marketeer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        do {
            $code = Str::random(5);
            $exists = Marketeer::where('code', $code)->exists();
        } while ($exists);

        Marketeer::create(['code' => $code] + $request->validated());
        return redirect()->route('dashboard.marketeer.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marketeer $marketeer)
    {
        return view('dashboard.Marketeer.edit', compact('marketeer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Marketeer $marketeer)
    {
        $marketeer->update($request->validated());
        return redirect()->route('dashboard.marketeer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marketeer $marketeer)
    {
        $marketeer->delete();
        return redirect()->route('dashboard.marketeer.index');
    }
}
