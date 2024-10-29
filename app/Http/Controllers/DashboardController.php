<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return \view('backend/dashboard', \compact('user'));
    }
    public function history()
    {
        $user = Auth::user();

        return \view('backend/story', \compact('user'));
    }
}
