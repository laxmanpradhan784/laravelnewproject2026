<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminProfileController extends Controller
{
    // Show admin profile
    public function index()
    {
        $admin = Admin::first(); // Or auth()->guard('admin')->user() if using auth
        return view('admin.profile', compact('admin'));
    }

    // Update admin profile
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        // Validate form
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'nullable|string|max:100',
            'email'      => 'required|email|unique:admins,email,' . $admin->id,
            'password'   => 'nullable|string|min:6',
            'phone'      => 'nullable|string|max:30',
            'gender'     => 'nullable|in:Male,Female,Other',
            'address'    => 'nullable|string|max:255',
            'nation'     => 'nullable|string|max:100',
            'twitter'    => 'nullable|url|max:255',
            'linkedin'   => 'nullable|url|max:255',
            'facebook'   => 'nullable|url|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update fields
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->gender = $request->gender;
        $admin->address = $request->address;
        $admin->nation = $request->nation;
        $admin->twitter = $request->twitter;
        $admin->linkedin = $request->linkedin;
        $admin->facebook = $request->facebook;

        // Update password if provided
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        // Upload profile image if provided
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($admin->profile_image && Storage::exists($admin->profile_image)) {
                Storage::delete($admin->profile_image);
            }

            $path = $request->file('profile_image')->store('uploads/admins', 'public');
            $admin->profile_image = $path;
        }

        $admin->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
