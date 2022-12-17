<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [
                'nama_depan' => 'Nabil',
                'nama_belakang' => 'Nabila',
                'jenis_kelamin' => 'Perempuan'
            ],
            [
                'nama_depan' => 'Adam',
                'nama_belakang' => 'Kensa',
                'jenis_kelamin' => 'Laki - Laki'
            ]
        ]);
    }
}