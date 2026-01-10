<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /* =========================
       SHOW LOGIN PAGE
    ========================= */
    public function showLogin()
    {
        return view('admin.login');
    }

    /* =========================
       SHOW REGISTER PAGE
    ========================= */
    public function showRegister()
    {
        return view('admin.register');
    }

    /* =========================
       HANDLE REGISTER
       → REDIRECT TO LOGIN
    ========================= */
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'username'   => 'required|string|max:255|unique:admins,username',
            'email'      => 'required|email|unique:admins,email',
            'password'   => 'required|min:6',
        ]);

        Admin::create([
            'name'     => $request->first_name,
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // ✅ DO NOT AUTO-LOGIN
        return redirect()
            ->route('admin.login')
            ->with('success', 'Admin account created successfully. Please login.');
    }

    /* =========================
       HANDLE LOGIN
    ========================= */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password',
        ])->withInput();
    }

    /* =========================
       LOGOUT
    ========================= */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
