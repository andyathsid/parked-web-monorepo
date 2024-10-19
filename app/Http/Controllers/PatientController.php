<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'Info';

        return \view('frontend/InfoPatien', \compact('user', 'tittle'));
    }
    public function DiagnosaForm()
    {
        $user = Auth::user();
        $tittle = 'Form Diagnosa';
        return \view('frontend/FormDiagnosa', \compact('user', 'tittle'));
    }
}
