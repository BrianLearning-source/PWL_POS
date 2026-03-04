<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Badro',
                'penjualan_kode' => 'PNJ01',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PNJ02',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Joko',
                'penjualan_kode' => 'PNJ03',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Jati',
                'penjualan_kode' => 'PNJ04',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Murui',
                'penjualan_kode' => 'PNJ05',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Alex',
                'penjualan_kode' => 'PNJ06',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Susan',
                'penjualan_kode' => 'PNJ07',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Uiui',
                'penjualan_kode' => 'PNJ08',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Gojo Toyoya',
                'penjualan_kode' => 'PNJ09',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Getoi',
                'penjualan_kode' => 'PNJ10',
                'penjualan_tanggal' => '2024-06-01',
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
