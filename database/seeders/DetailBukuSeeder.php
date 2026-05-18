<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_buku')->insert([
            [
                'buku_id' => 1,
                'isbn' => 'ISBN-001',
                'jumlah_halaman' => 200
            ],
            [
                'buku_id' => 2,
                'isbn' => 'ISBN-002',
                'jumlah_halaman' => 250
            ],
            [
                'buku_id' => 3,
                'isbn' => 'ISBN-003',
                'jumlah_halaman' => 300
            ]
        ]);
    }
}
