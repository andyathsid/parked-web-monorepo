<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dateOfBirth' => 'required|date',
            'address' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:15',
            'occupation' => 'nullable|string|max:255',
        ]);

        // \dd($request);
        $user = Auth::user();
        $user = $user->id;

        $users = User::find($user);


        if ($request->hasFile('photo')) {
            if ($users->photo && $users->photo !== 'profile_photos/defaultUser.jpg') {
                Storage::disk('public')->delete($users->photo);
            }

            $users->photo = $request->file('photo')->store('profile_photos', 'public');
        }
        $users->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'tgl_ulangtahun' => $request->dateOfBirth,
            'address' => $request->address,
            'phone_number' => $request->phoneNumber,
            'occupation' => $request->occupation,
            'photo' => $request->photo
        ]);


        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }

    public function history()
    {
        $user = Auth::user();
        $tittle = 'History User';
        $history = Form::all();

        return \view('frontend/user/history', \compact('user', 'tittle', 'history'));
    }
}
