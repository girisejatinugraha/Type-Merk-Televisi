<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Televisiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('televisi')->insert([
            'produk_tv' => 'Aqua Japan',
            'asal_tv' => 'Jepang',
            'harga_tv' => '1,9 Juta',
            'ukuran layar_tv' => '32 Inci',
            'kualitas gambar_tv' => 'HD',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('televisi')->insert([
            'produk_tv' => 'Coocaa',
            'asal_tv' => 'Cina',
            'harga_tv' => '1,5 Juta',
            'ukuran layar_tv' => '44 Inci',
            'kualitas gambar_tv' => 'HD',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('televisi')->insert([
            'produk_tv' => 'Samsung',
            'asal_tv' => 'Korea Selatan',
            'harga_tv' => '2,4 Juta',
            'ukuran layar_tv' => '32 Inci',
            'kualitas gambar_tv' => 'HD',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
    }
}
