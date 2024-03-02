<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Detail Penjualan 1
            [
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 10000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 15000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 20000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 2
            [
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 25000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 11000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 16000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 3
            [
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 21000,
                'jumlah' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 26000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 5000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 4
            [
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 8000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 1,
                'harga' => 25000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 5000,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 5
            [
                'penjualan_id' => 5,
                'barang_id' => 3,
                'harga' => 18000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 4,
                'harga' => 12000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 5000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 6
            [
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 8000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 7,
                'harga' => 18000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 8,
                'harga' => 7000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 7
            [
                'penjualan_id' => 7,
                'barang_id' => 9,
                'harga' => 15000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 10,
                'harga' => 12000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 1,
                'harga' => 5000,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 8
            [
                'penjualan_id' => 8,
                'barang_id' => 2,
                'harga' => 10000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 25000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 4,
                'harga' => 3000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 9
            [
                'penjualan_id' => 9,
                'barang_id' => 5,
                'harga' => 15000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 6,
                'harga' => 12000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 18000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Detail Penjualan 10
            [
                'penjualan_id' => 10,
                'barang_id' => 8,
                'harga' => 25000,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 9,
                'harga' => 30000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 6000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
