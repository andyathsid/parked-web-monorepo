<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Console\View\Components\Alert;
// use Alert;

class AuthController extends Controller
{
    public function index()
    {
        $tittle = 'Login';
        $user = Auth::user();

        return view('Login.login', \compact('tittle', 'user'));
    }
    public function regist()
    {
        $tittle = 'Registrations';
        $user = Auth::user();

        return view('Login.regist', \compact('tittle', 'user'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        // \dd($request);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => 'profile_photos/defaultUser.jpg',
            'role' => 'user',
            'last_login' => \now(),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $user->sendEmailVerificationNotification();

        return redirect()->route('login')->with('Registrasi Sukses', 'Berhasil mendaftar! Silakan verifikasi email Anda.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->email_verified_at === null) {
                return redirect()->route('login')->with('EmailVerif', "Anda belum memverifikasi email Anda! Apakah Anda ingin mengirim ulang email verifikasi?");
            }

            if (Auth::attempt($request->only('email', 'password'))) {
                $user->update(['last_login' => now()]);

                if ($user->role == 'admin') {
                    return redirect()->route('login', compact('user'))->with('loginAdmin', 'Login berhasil! Selamat datang, Admin!');
                } else if ($user->role == 'user') {
                    return redirect()->route('login', compact('user'))->with('loginUser', 'Login berhasil! Selamat datang!');
                }
            } else {
                return redirect()->route('login')->with('loginGagal', 'Email atau Password salah!');
            }
        } else {
            return redirect()->route('login')->with('loginGagal', 'Email tidak terdaftar!');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }

    public function resendVerificationEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification email has been resent.');
    }

    public function VerificationResendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user->hasVerifiedEmail()) {
            return back()->with('error', 'Akun Anda sudah diverifikasi.');
        }

        if ($request->user()->hasTooManyLoginAttempts()) {
            return back()->with('error', 'Terlalu banyak permintaan. Coba lagi nanti.');
        }

        $user->sendEmailVerificationNotification();

        return back()->with('message', 'Email verifikasi telah dikirim ulang.');
    }
    public function notVerif()
    {
        $tittle = 'Not Verifikasi';
        return \view('Login\email-verify', \compact('tittle'));
    }
}
