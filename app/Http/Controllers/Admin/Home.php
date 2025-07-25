<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\penduduk;
use App\Models\sambutankades;
use App\Models\testimonial;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function homeAdmin()
    {
        // Logic for the admin home page
        return view('Admin.dashboard');
    }


    /////////////////////////Sambutan Kades//////////////////////////
    public function sambutanKades()
    {

        $data = sambutankades::all();
        return view('Admin.Home.Sambutan.Sambutan', compact('data'));
    }

    public function editsambutan($id)
    {
        $data = sambutankades::findOrFail($id);
        return view('Admin.Home.Sambutan.editsambutan', compact('data'));
    }
    public function updatesambutan(Request $request, $id)
    {
        $sambutan = sambutankades::findOrFail($id);

        // Simpan nama file lama sebagai default
        $fotokades = $sambutan->foto;

        // Jika ada file baru di-upload
        if ($request->hasFile('foto')) {
            $posterFile = $request->file('foto');
            $fotokades = time() . '_' . $posterFile->getClientOriginalName();
            $posterFile->move(public_path('kades'), $fotokades);
        }

        // Update data agenda
        $sambutan->update([
            'nama'     => $request->input('nama'),
            'sambutan'  => $request->input('sambutan'),
            'foto'   => $fotokades,
        ]);

        return redirect()->route('viewsambutanKades')->with('success', 'Agenda berhasil diperbarui');
    }



    //////////////////////////////Total Penduduk///////////////////////////////////////
    public function Penduduk()
    {

        $datapenduduk = penduduk::all();
        return view('Admin.Home.Kependudukan.DataKependudukan', compact('datapenduduk'));
    }

    public function editpenduduk($id)
    {
        $datapenduduk = penduduk::findOrFail($id);
        return view('Admin.Home.Kependudukan.EditKependudukan', compact('datapenduduk'));
    }
    public function updatependuduk(Request $request, $id)
    {
        // dd($request->all());
        $uppenduduk = penduduk::findOrFail($id);

        // Update data agenda
        $uppenduduk->update([
            'total_dusun'=> $request->input('total_dusun'),
            'total_rt'=> $request->input('total_rt'),
            'total_rw'=> $request->input('total_rw'),
            'laki_laki'=> $request->input('laki_laki'),
            'perempuan'=> $request->input('perempuan'),
            'total_penduduk'  => $request->input('total_penduduk'),
        ]);
        // dd($uppenduduk);
        return redirect()->route('viewPenduduk')->with('success', 'Agenda berhasil diperbarui');
    }

    ////////////////////////////////////////////TESTIMONIALLLL///////////////////////////////////
    public function testimonialDesa()
    {
        $data = testimonial::all();
        // Logic for the agenda desa page
        return view('Admin.Home.Testimoni.Testimoni', compact('data'));
    }
    public function tambahtestimoni()
    {
        return view('Admin.Home.Testimoni.TambahTestimoni');
    }
    public function inserttestimoni(Request $request)
    {
            $testi = null;

    if ($request->hasFile('foto_testimonial')) {
        $posterFile = $request->file('foto_testimonial');
        $testi = $posterFile->getClientOriginalName();
        $posterFile->move(public_path('fototestimonial'), $testi);
    }

    $data = testimonial::create([
        'nama' => $request->input('nama'),
        'keterangan' => $request->input('keterangan'),
        'deskripsi_testimonial' => $request->input('deskripsi_testimonial'),
        'rating' => $request->input('rating'),
        'foto_testimonial' => $testi // <- sudah diisi, tidak null
    ]);
        return redirect()->route('viewtestimonialDesa')->with('success', 'Berhasil Di Tambahkan');
    }
    // public function home()
    // {
    //     // Logic for the landing home page
    //     return view('Landing.home');
    // }
}
