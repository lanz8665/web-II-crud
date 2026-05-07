<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{

    public function run(): void
    {
        $kategori = [
                        [
                            'nama_kategori' => 'Multimedia',
                            'created_at' => now(),
                            'updated_at'=> now()	
                        ],
                        [
                            'nama_kategori' => 'Database Design',
                            'created_at' => now(),
                            'updated_at'=> now()	
                        ]
        ];
        DB::table('kategori')->insert($kategori);
    }
}
