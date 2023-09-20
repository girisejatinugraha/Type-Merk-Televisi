<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswa')->insert([
            'gambar'=>'',
            'nim_mhs'=>'221110222',
            'nama_mhs'=>'Apang',
            'ttl_mhs'=>'Bandung 16 11 2003',
            'alamat_mhs'=>'Melong',
            'telpon_mhs'=>'082115623877',
            'email_mhs'=>'giri@gmail.com',
            'kota_mhs'=>'Cimahi',
            'agama_mhs'=>'Islam',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('mahasiswa')->insert([
            'gambar'=>'',
            'nim_mhs'=>'221110222',
            'nama_mhs'=>'Apang',
            'ttl_mhs'=>'Bandung 12 12 2003',
            'alamat_mhs'=>'Margaasih',
            'telpon_mhs'=>'082115644877',
            'email_mhs'=>'apang@gmail.com',
            'kota_mhs'=>'Bandung',
            'agama_mhs'=>'Islam',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('mahasiswa')->insert([
            'gambar'=>'',
            'nim_mhs'=>'221110294',
            'nama_mhs'=>'Aasdsad',
            'ttl_mhs'=>'asdasd',
            'alamat_mhs'=>'asd',
            'telpon_mhs'=>'9831',
            'email_mhs'=>'anugra@gmail.com',
            'kota_mhs'=>'Cimai',
            'agama_mhs'=>'Budha',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
