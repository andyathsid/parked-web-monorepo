<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return \view('frontend/user/profile');
    }
    public function history()
    {
        return \view('frontend/user/history');
    }
}
