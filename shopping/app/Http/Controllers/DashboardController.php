<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.home');
    }

    public function login()
    {
        return view('admin.home.admin-login');
    }
    

    
}
