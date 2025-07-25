<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\penduduk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $penduduk = penduduk::all();
        return view("LandingPage.home", compact('penduduk'));
    }
}
