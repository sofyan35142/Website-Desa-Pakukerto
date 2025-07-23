<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaDesa extends Controller
{
    public function AgendaDesa()
    {
        $data = Agenda::all();
        // Logic for the agenda desa page
        return view('Admin.Agenda.Agendadesa', compact('data'));
    }
}
