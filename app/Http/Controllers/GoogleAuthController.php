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
    protected function redirectBasedOnRole($user)
    {
        if ($user->role == 'admin') {
            return \redirect()->intended('/dashboard');
        } else if ($user->role == 'user') {
            return \redirect()->intended('/profile');
        }
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
                    'role' => 'user',
                    'email_verified_at' => \now(),
                ]);
                Auth::login($new_user);

                return $this->redirectBasedOnRole($new_user);
            } else {
                Auth::login($user);

                return $this->redirectBasedOnRole($user);
            }
        } catch (\Throwable $th) {
            // \dd('something went wrong!' . $th->getMessage());
            return redirect()->route('login')->withErrors('loginGagal', 'Login dengan Google gagal. Silakan coba lagi.');
        }
    }
}
