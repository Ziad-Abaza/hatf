<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use App\Mail\ConfirmRegisterMail;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Dashboard\Admin\StoreRequest;
use App\Http\Requests\Dashboard\Admin\UpdateRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $admins = Admin::get();
        return view('dashboard.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     
    public function store(StoreRequest $request)
    {
        $randCode=rand(100000,1000000);
        $admin= Admin::create([
        'password' => Hash::make(rand(100000,1000000)),
        'remember_token'=>$randCode
        ] + $request->validated());
        
        $link = route('confrm-mail', ['randCode' => $randCode]);

        Mail::to($admin->email)->send(new ConfirmRegisterMail($link));
        
        return redirect()->route('dashboard.admin.index');
    }

    /**
     * Display the specified resource.  confrm-mail.
     */
    public function show(Admin $admin)
    {
        return view('dashboard.admin.edit', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('dashboard.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Admin $admin)
    {
        $password = ($request->password) ? Hash::make($request->password) : $admin->password;
        $admin->update(['password' =>  $password] + $request->validated());
        return redirect()->route('dashboard.admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('dashboard.admin.index');
    }
}
