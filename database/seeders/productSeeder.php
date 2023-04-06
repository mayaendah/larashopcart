<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product::insert([
            [
                'nama_product'=>'T-Shirt',
                'harga_satuan'=>100000
            ],
            [
                'nama_product'=>'Celana panjang',
                'harga_satuan'=>150000

            ],
            [
                'nama_product'=>'Topi merah',
                'harga_satuan'=>10000

            ],
            [
                'nama_product'=>'Celana pendek',
                'harga_satuan'=>110000

            ]
        ]
       );
    }
}
