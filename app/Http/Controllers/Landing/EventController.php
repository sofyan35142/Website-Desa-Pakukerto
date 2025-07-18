<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function viewevent()
    {
        return view('LandingPage.event');
    }
    public function vieweventdetail()
    {
        return view('LandingPage.eventdetail');
    }
}
