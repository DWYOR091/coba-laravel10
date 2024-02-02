<?php

namespace Database\Seeders;

use App\Models\anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Sari Tania Puspita'
            ],
            [
                'nama' => 'Diki Alfarabi Hadi'
            ],
            [
                'nama' => 'Luluh Sinaga'
            ],
            [
                'nama' => 'Lamar Putra'
            ],
            [
                'nama' => 'Banawi Kuswoyo'
            ],
            [
                'nama' => 'Ratih Wijayanti'
            ],
        ];
        anggota::insert($data);
    }
}
