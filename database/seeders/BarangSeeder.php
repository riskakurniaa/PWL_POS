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
        $barangData = [
            // Skincare (SKR)
            [
                'kategori_id' => 1,
                'barang_kode' => 'SKR1',
                'barang_nama' => 'Facial Cleanser',
                'harga_beli' => 20000,
                'harga_jual' => 35000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'SKR2',
                'barang_nama' => 'Moisturizer',
                'harga_beli' => 25000,
                'harga_jual' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Makanan (MKN)
            [
                'kategori_id' => 2,
                'barang_kode' => 'MKN1',
                'barang_nama' => 'Burger',
                'harga_beli' => 10000,
                'harga_jual' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'MKN2',
                'barang_nama' => 'Pizza',
                'harga_beli' => 25000,
                'harga_jual' => 35000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Minuman (MNM)
            [
                'kategori_id' => 3,
                'barang_kode' => 'MNM1',
                'barang_nama' => 'Es Teh',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MNM2',
                'barang_nama' => 'Es Jeruk',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Buku (BK)
            [
                'kategori_id' => 4,
                'barang_kode' => 'BK1',
                'barang_nama' => 'Programming Basics',
                'harga_beli' => 30000,
                'harga_jual' => 45000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BK2',
                'barang_nama' => 'Web Development',
                'harga_beli' => 45000,
                'harga_jual' => 55000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Barang Lainnya (BRG)
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG1',
                'barang_nama' => 'Casing HP',
                'harga_beli' => 15000,
                'harga_jual' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG2',
                'barang_nama' => 'Sunglasses',
                'harga_beli' => 10000,
                'harga_jual' => 18000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('m_barang')->insert($barangData);
    }
}
