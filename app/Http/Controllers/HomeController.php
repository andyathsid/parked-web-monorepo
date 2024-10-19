<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'HOME';
        return \view('frontend/home', \compact('user', 'tittle'));
    }
    public function Resources()
    {
        $user = Auth::user();
        $tittle = 'Resources';
        return \view('frontend/Resources', \compact('user', 'tittle'));
    }
}
