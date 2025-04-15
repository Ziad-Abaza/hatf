<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Dashboard\Auth\LoginRequest;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('dashboard.auth.login');
    }

    public function loginPost(LoginRequest $request): RedirectResponse
    {
        if (! Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back()->with('error', 'The email and password do not match');
        }

        return redirect()->route('dashboard.invoices.index');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }





    public function confrmMail($randCode): View
    {
        $admin = Admin::where('remember_token', $randCode)->first();

        if (!$admin) {
            return view('dashboard.auth.confrm-mail-error');
        }


        return view('dashboard.auth.confrm-mail', ['randCode' => $randCode]);
    }

    public function confrmMailPost(Request $request, $randCode)
    {
        // Validate the password
        $request->validate([
            'password' => 'required|string|min:8', // 'confirmed' ensures password confirmation
        ]);

        $admin = Admin::where('remember_token', $randCode)->first();

        if (!$admin) {
            return view('dashboard.auth.confrm-mail-error');
        }

        // Update the password
        $admin->update([
            'password' => bcrypt($request->password),
            'remember_token' => null
        ]);

        return view('dashboard.auth.confrm-mail-success');
    }
}
