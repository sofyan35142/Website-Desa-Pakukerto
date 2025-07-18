<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function ViewUmkm()
    {
        return view("LandingPage.umkm");
    }

    public function ViewDetailUmkm()
    {
        return view("LandingPage.umkmdetail");
    }
}
