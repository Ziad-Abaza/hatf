<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Marketeer;
use App\Models\Commission;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Marketeer\StoreRequest;
use App\Http\Requests\Dashboard\Marketeer\UpdateRequest;
use Illuminate\Http\Request;

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
        return view('dashboard.marketeer.edit', compact('marketeer'));
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

    public function showCommissions(Marketeer $marketeer)
    {
        // get all commissions for the marketeer
        $commissions = $marketeer->commissions()
            ->where('paid', false)
            ->with('payment')
            ->latest()
            ->get();

        // get all paid commissions for the marketeer
        $paidCommissions = $marketeer->commissions()
            ->where('paid', true)
            ->with('payment')
            ->latest()
            ->get();

        // calculate total unpaid and paid commissions
        $totalUnpaid = $commissions->sum('amount');
        $totalPaid = $paidCommissions->sum('amount');

        return view('dashboard.marketeer.commissions', compact(
            'marketeer',
            'commissions',
            'paidCommissions',
            'totalUnpaid',
            'totalPaid'
        ));
    }

public function settleCommissions(Marketeer $marketeer, Request $request)
{
    $request->validate([
        'commission_ids' => 'required|array',
        'commission_ids.*' => 'exists:commissions,id,marketeer_id,' . $marketeer->id,
    ]);

    Commission::whereIn('id', $request->commission_ids)->update([
        'paid' => true,
        'paid_at' => now(),
    ]);

    return redirect()->back()->with('success', 'تم سداد العمولة المحددة بنجاح');
}
}
