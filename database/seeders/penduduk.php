<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penduduk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penduduks')->insert([
            'total_dusun' => '5',
            'total_rt' => '5',
            'total_rw' => '5',
            'laki_laki' => '5',
            'perempuan' => '5',
            'total_penduduk' => '5',
        ]);
    }
}
