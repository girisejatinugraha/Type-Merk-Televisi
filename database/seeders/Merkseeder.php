<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Merkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('merk')->insert([
            'produk_tv' => 'Aqua Japan',
            'asal_tv' => 'Jepang',
            'harga_tv' => '1,9 Juta',
            'ukuran_tv' => '32 Inci',
            'kualitas_tv' => 'HD',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('merk')->insert([
            'produk_tv' => 'Coocaa',
            'asal_tv' => 'Cina',
            'harga_tv' => '1,5 Juta',
            'ukuran_tv' => '44 Inci',
            'kualitas_tv' => 'HD',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('merk')->insert([
            'produk_tv' => 'Samsung',
            'asal_tv' => 'Korea Selatan',
            'harga_tv' => '2,4 Juta',
            'ukuran_tv' => '32 Inci',
            'kualitas_tv' => 'HD',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
    }
}
