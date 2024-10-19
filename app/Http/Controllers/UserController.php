<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'Profile User';
        return \view('frontend/user/profile', \compact('user', 'tittle'));
    }
    public function history()
    {
        $user = Auth::user();
        $tittle = 'History User';
        return \view('frontend/user/history', \compact('user', 'tittle'));
    }
}
