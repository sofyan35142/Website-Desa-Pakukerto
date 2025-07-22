<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function homeAdmin()
    {
        // Logic for the admin home page
        return view('Admin.dashboard');
    }

    // public function home()
    // {
    //     // Logic for the landing home page
    //     return view('Landing.home');
    // }
}
