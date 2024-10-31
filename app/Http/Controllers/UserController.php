<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'Profile User';
        return \view('frontend/user/profile', \compact('user', 'tittle'));
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'dateOfBirth' => 'required|date',
            'address' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:15',
            'occupation' => 'nullable|string|max:255',
        ]);

        $user = auth()->user();

        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->tgl_Ulangtahun = $request->dateOfBirth;
        $user->address = $request->address;
        $user->phone_number = $request->phoneNumber;
        $user->occupation = $request->occupation;

        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::delete($user->photo);
            }

            $user->photo = $request->file('photo')->store('profile_photos', 'public');
        }

        // $user->update();

        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }

    public function history()
    {
        $user = Auth::user();
        $tittle = 'History User';
        return \view('frontend/user/history', \compact('user', 'tittle'));
    }
}
