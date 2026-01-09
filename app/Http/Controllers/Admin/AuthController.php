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
       SHOW LOGIN FORM
    ========================= */
    public function showLogin()
    {
        return view('admin.login');
    }

    /* =========================
       LOGIN ADMIN
    ========================= */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid admin credentials');
    }

    /* =========================
       SHOW REGISTER FORM
       (OPTIONAL – usually hidden)
    ========================= */
    public function showRegister()
    {
        return view('admin.register');
    }

    /* =========================
       REGISTER ADMIN
    ========================= */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:admins',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('admin')->login($admin);

        return redirect()->route('admin.dashboard');
    }

    /* =========================
       LOGOUT
    ========================= */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
