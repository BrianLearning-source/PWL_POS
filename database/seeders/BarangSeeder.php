<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG01',
                'barang_nama' => 'Foam',
                'harga_beli' => 2500,
                'harga_jual' => 3000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG02',
                'barang_nama' => 'Karet',
                'harga_beli' => 1500,
                'harga_jual' => 2000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG03',
                'barang_nama' => 'Bantal',
                'harga_beli' => 10000,
                'harga_jual' => 11000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG04',
                'barang_nama' => 'Kayu Jati',
                'harga_beli' => 100000,
                'harga_jual' => 150000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'BRG05',
                'barang_nama' => 'Kayu Mahoni',
                'harga_beli' => 120000,
                'harga_jual' => 125000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG06',
                'barang_nama' => 'Baja',
                'harga_beli' => 1000000,
                'harga_jual' => 1100000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'BRG07',
                'barang_nama' => 'Kaca Bening',
                'harga_beli' => 50000,
                'harga_jual' => 60000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'BRG08',
                'barang_nama' => 'Kaca Buram',
                'harga_beli' => 50000,
                'harga_jual' => 55000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'BRG09',
                'barang_nama' => 'Kaca Pintar',
                'harga_beli' => 100000,
                'harga_jual' => 130000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'BRG10',
                'barang_nama' => 'Indomie',
                'harga_beli' => 2500,
                'harga_jual' => 3000
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'BRG11',
                'barang_nama' => 'Saos Belibis',
                'harga_beli' => 7500,
                'harga_jual' => 10000
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 'BRG12',
                'barang_nama' => 'Mayonaise',
                'harga_beli' => 5000,
                'harga_jual' => 6000
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'BRG13',
                'barang_nama' => 'Gas Epiji 3 kg',
                'harga_beli' => 21000,
                'harga_jual' => 25000
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'BRG14',
                'barang_nama' => 'Gas Portable',
                'harga_beli' => 17500,
                'harga_jual' => 20000
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'BRG15',
                'barang_nama' => 'Gas Elpiji 12 kg',
                'harga_beli' => 50000,
                'harga_jual' => 55000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
