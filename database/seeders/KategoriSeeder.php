<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'LNK',
                'kategori_nama' => 'Lunak'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'KRS',
                'kategori_nama' => 'Keras'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'MPCH',
                'kategori_nama' => 'Mudah Pecah'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'MKMN',
                'kategori_nama' => 'Makanan Minuman'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'GS',
                'kategori_nama' => 'Gas'
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
