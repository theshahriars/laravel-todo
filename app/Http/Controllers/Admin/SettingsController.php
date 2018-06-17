<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

// Models
use App\User;

class SettingsController extends Controller
{
    public function profile()
    {
        $user = Auth::user();

        return view('admin.settings.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'email' => 'required|email'
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('message', 'Profile has been updated successfully.');
    }

    public function password()
    {
        return view('admin.settings.password');
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('message', 'Password has been changed successfully.');
    }
}
