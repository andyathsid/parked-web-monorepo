<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'User Management';



        return \view('backend/UserManagement/index', \compact('user', 'tittle'));
    }

    public function tambah()
    {
        $user = Auth::user();
        $tittle = 'Add User';

        return \view('backend/UserManagement/add', \compact('user', 'tittle'));
    }
    public function edit()
    {
        $user = Auth::user();
        $tittle = 'Edit User';
        return \view('backend/UserManagement/edit', \compact('user', 'tittle'));
    }
}
