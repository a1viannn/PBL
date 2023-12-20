<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendaftaran::create([
            'nama' => 'alvian',
            'nim' => '362258302189',
            'prodi' => 'TRPL',
            'email' => 'alvian@gmail.com',
            'no_telp' => '085232714051',
            'cv' => '',
            'divisi_1' => 1,
            'divisi_2' => 2,
            'status' => '',
            'jabatan' => '',
        ]);
    }
}
