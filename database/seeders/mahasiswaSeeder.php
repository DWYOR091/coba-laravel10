<?php

namespace Database\Seeders;

use App\Models\mahasiswas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     DB::table('mahasiswa')->insert([

    // ]);

    //eloquen
    $data = [
        [
            'npm' => '2113221035',
            'nama' => 'M Rifqi',
            'jurusan' => 'Informatika',
            'created_at' => now()->format('Y-m-d'),
            'updated_at' => now()->format('Y-m-d'),
        ],
        [
            'npm' => '2113221036',
            'nama' => 'Aldi',
            'jurusan' => 'Informatika',
            'created_at' => now()->format('Y-m-d'),
            'updated_at' => now()->format('Y-m-d'),
        ],
    ];
    mahasiswas::insert($data);
    }
}
