<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Persuratan extends Controller
{
    public function viewSurat()
    {
        return view('Admin.persuratan.viewPersuratan');
    }
}
