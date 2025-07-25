<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;
use Carbon\Carbon;

class PersuratanController extends Controller
{
    public function viewpersuratan()
    {
        return view("LandingPage.persuratan");
    }

    public function submitSkck(Request $request)
    {
        // Step 1: Validasi data
        $validatedData = $request->validate([
            'nama_lengkap'       => 'required|string|max:255',
            'tempat_lahir'       => 'required|string|max:255',
            'tanggal_lahir'      => 'required|date',
            'agama'              => 'required|string|max:255',
            'nik'                => 'required|string',
            'status_perkawinan'  => 'required|string|max:255',
            'pekerjaan'          => 'required|string|max:255',
            'pendidikan'         => 'required|string|max:255',
            'alamat_lengkap'     => 'required|string|max:255',
        ]);

        // Step 2: Cek template Word
        $templateDocxFileName = 'SURAT PENGANTAR PERMOHONAN SKCK.docx';
        $templateDocxPath = storage_path('app/templates/' . $templateDocxFileName);

        if (!file_exists($templateDocxPath)) {
            dd("Template tidak ditemukan di: $templateDocxPath");
        }

        // Step 3: Isi template
        try {
            $templateProcessor = new TemplateProcessor($templateDocxPath);

            $templateProcessor->setValue('Nama', $validatedData['nama_lengkap']);
            $templateProcessor->setValue('Tempat/Tgl.Lahir', $validatedData['tempat_lahir'] . ', ' . Carbon::parse($validatedData['tanggal_lahir'])->translatedFormat('d F Y'));
            $templateProcessor->setValue('Agama', $validatedData['agama']);
            $templateProcessor->setValue('NIK', $validatedData['nik']);
            $templateProcessor->setValue('Status Perkawinan', $validatedData['status_perkawinan']);
            $templateProcessor->setValue('Pekerjaan', $validatedData['pekerjaan']);
            $templateProcessor->setValue('Pendidikan', $validatedData['pendidikan']);
            $templateProcessor->setValue('Alamat', $validatedData['alamat_lengkap']);

            // Step 4: Simpan file Word sementara
            $outputDocxName = 'Surat_SKCK_' . time() . '.docx';
            $outputDocxPath = storage_path('app/temp/' . $outputDocxName);

            if (!file_exists(storage_path('app/temp'))) {
                mkdir(storage_path('app/temp'), 0775, true);
            }

            $templateProcessor->saveAs($outputDocxPath);

            // Step 5: Unduh file Word langsung
            return response()->download($outputDocxPath)->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            dd("Terjadi error saat generate surat", $e->getMessage());
        }
    }
}
