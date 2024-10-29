<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'Dashboard';

        return \view('backend/dashboard', \compact('user', 'tittle'));
    }
    public function history()
    {
        $user = Auth::user();
        $tittle = 'History Form';

        return \view('backend/story', \compact('user', 'tittle'));
    }
}
