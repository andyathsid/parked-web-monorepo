<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return \view('frontend/home');
    }
    public function patient()
    {
        return \view('frontend/InfoPatien');
    }
    public function DiagnosaForm()
    {
        return \view('frontend/FormDiagnosa');
    }
}
