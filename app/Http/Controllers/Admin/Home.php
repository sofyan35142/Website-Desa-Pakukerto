<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\sambutankades;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function homeAdmin()
    {
        // Logic for the admin home page
        return view('Admin.dashboard');
    }


    //////////////Sambutan Kades//////////////////////////
    public function sambutanKades()
    {

        $data= sambutankades::all();
        return view('Admin.Home.Sambutan.Sambutan', compact('data'));
    }

        public function editsambutan($id)
    {
        $data = sambutankades::findOrFail($id);
        return view('Admin.Home.Sambutan.editsambutan',compact('data'));
    }
        public function updatesambutan(Request $request, $id)
    {
        // dd('p');
        $data = sambutankades::find($id);
        $data->update([
            'nama' => $request->nama,
            'sambutan' => $request->sambutan

        ]);
        // $data->update($request->all());
        // dd($data);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('kepsek/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('sambutankepsek')->with('success', 'Berhasil Di Update');
    }

    // public function home()
    // {
    //     // Logic for the landing home page
    //     return view('Landing.home');
    // }
}
