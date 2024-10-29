<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryFormController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'History Form';

        return \view('backend/story', \compact('user', 'tittle'));
    }
}
