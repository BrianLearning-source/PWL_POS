<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP01',
                'supplier_nama' => 'PT. Jaya Abadi',
                'supplier_alamat' => 'JL. Mojokerto no 1'
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP02',
                'supplier_nama' => 'PT. Cargo Carona',
                'supplier_alamat' => 'JL.Jombang no 4'
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP03',
                'supplier_nama' => 'PT. Mata Gojo',
                'supplier_alamat' => 'JL. Kediri no 10'
            ]
        ];
        DB::table('m_supplier')->insert($data);
    }
}
