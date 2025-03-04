<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
     public function index()
    {
        return view('admin.profile.index');
    }

    /* Update user profile */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'mobile' => ['required', 'numeric', 'digits:10'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id]
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->save();

        session()->flash('success', 'Profile updated successfully!');
        return redirect()->back();

    }

    /* Update User Profile Password */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);
        
        session()->flash('success', 'Password updated successfully!');
        return redirect()->back();

    }
}
