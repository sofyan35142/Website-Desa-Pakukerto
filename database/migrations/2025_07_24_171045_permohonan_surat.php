<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('permohonan_surat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('jenis_surat'); // bisa juga pakai enum jika ingin dibatasi
            $table->string('file_surat'); // nama file Word (atau PDF jika nanti disimpan)
            $table->json('data_lainnya')->nullable(); // untuk simpan data tambahan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permohonan_surat');
    }
};
