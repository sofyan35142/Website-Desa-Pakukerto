<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileDesa extends Controller
{
    public function ViewSejarahDesa()
    {
        return view("LandingPage.SejarahDesa");
    }

    public function ViewVisiMisi()
    {
        return view("LandingPage.VisiMisi");
    }

    public function Kelembagaan()
    {
        return view("LandingPage.Kelembagaan");
    }

    public function LetakGeografis()
    {
        return view("LandingPage.LetakGeografis");
    }


}
