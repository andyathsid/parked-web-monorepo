<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = User::create([
                    'first_name' => $google_user->user['given_name'], // Menggunakan given_name dari Google
                    'last_name' => $google_user->user['family_name'],
                    'email' => $google_user->getEmail(),
                    'photo' => $google_user->getAvatar(),
                    'google_id' => $google_user->getId(),
                ]);

                Auth::login($new_user);

                return \redirect()->intended('/profile');
            } else {
                Auth::login($user);

                return \redirect()->intended('/profile');
            }
        } catch (\Throwable $th) {
            \dd('something went wrong!' . $th->getMessage());
            return redirect()->route('login')->withErrors('Login dengan Google gagal. Silakan coba lagi.');
        }
    }
}
