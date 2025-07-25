<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SambutanKades extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sambutankades')->insert([
            'nama' => 'H. Surateman',
            'sambutan' => 'Assalamu’alaikum Warahmatullahi Wabarakatuh,
Puji syukur kita panjatkan ke hadirat Allah SWT, karena atas limpahan rahmat dan karunia-Nya, website resmi Desa Pakukerto ini dapat kami hadirkan sebagai sarana informasi dan komunikasi antara pemerintah desa dengan masyarakat. Website ini merupakan bagian dari komitmen kami dalam mewujudkan tata kelola pemerintahan desa yang transparan, terbuka, dan berbasis teknologi informasi.

Melalui website ini, kami berupaya menyampaikan berbagai informasi penting terkait program kerja pemerintah desa, layanan administrasi, kegiatan sosial kemasyarakatan, serta potensi yang dimiliki Desa Pakukerto, baik dari sektor pertanian, UMKM, seni budaya, maupun pariwisata. Kami berharap media ini dapat menjadi penghubung yang aktif antara pemerintah dan warga, serta mendorong partisipasi masyarakat dalam pembangunan desa yang berkelanjutan.


Kami mengucapkan terima kasih atas dukungan semua pihak yang telah membantu dalam pengembangan website ini. Semoga keberadaan website Desa Pakukerto dapat memberikan manfaat nyata bagi masyarakat, serta menjadi salah satu langkah menuju desa yang maju, mandiri, dan berdaya saing tinggi di era digital ini.
Wassalamu’alaikum Warahmatullahi Wabarakatuh.',
            'foto' => 'rudi.png',
        ]);
    }
}
