<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Aplikasi',
            'nim' => '362258302189',
            'prodi' => 'Teknologi Rekayasa Perangkat Lunak',
            'email' => 'admin@ukmolahraga.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
    }
}
