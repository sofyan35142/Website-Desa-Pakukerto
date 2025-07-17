<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersuratanController extends Controller
{
    public function viewpersuratan()
    {
        return view("LandingPage.persuratan");
    }
}
