<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show Register Page
    public function showRegister()
    {
        return view('sign-up');
    }

    // Handle Register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|digits:10',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')
            ->with('success', 'Account created successfully. Please login.');
    }


    // Show Login Page
    public function showLogin()
    {
        return view('sign-in');
    }

    // Handle Login (basic)
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('my-account')->with('success', 'Login successful');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password',
        ])->withInput();
    }
}
