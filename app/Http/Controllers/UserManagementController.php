<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return \view('backend/UserManagement/index', \compact('user'));
    }

    public function tambah()
    {
        $user = Auth::user();

        return \view('backend/UserManagement/add', \compact('user'));
    }
    public function edit()
    {
        $user = Auth::user();

        return \view('backend/UserManagement/edit', \compact('user'));
    }
}
