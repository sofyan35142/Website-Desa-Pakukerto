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

    public function ViewKelembagaan()
    {
        return view("LandingPage.Kelembagaan");
    }

    public function ViewLetakGeografis()
    {
        return view("LandingPage.LetakGeografis");
    }
    public function ViewDemografi()
    {
        return view("LandingPage.demografi");
    }

    public function ViewKelembagaanDetail()
    {
        return view("LandingPage.detailkelembagaan");
    }

    public function ViewPotensiDesa()
    {
        return view("LandingPage.potensidesa");
    }


}
