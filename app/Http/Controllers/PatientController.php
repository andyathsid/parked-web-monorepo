<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return \view('frontend/InfoPatien');
    }
    public function DiagnosaForm()
    {
        return \view('frontend/FormDiagnosa');
    }
}
