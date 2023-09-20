<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tugasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tugas')->insert([
           'kanal_tv' => '23',
           'lembaga_tv' => 'LPP. Televisi RI',
           'udara_tv' => 'TVRI',
           'wilayah_tv' => 'Kabupaten Demak',
           'alamat_tv' => 'Pucanggading',
           'created_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('tugas')->insert([
            'kanal_tv' => '27',
            'lembaga_tv' => 'PT. Indosiar',
            'udara_tv' => 'INDOSIAR',
            'wilayah_tv' => 'Kota Semarang',
            'alamat_tv' => 'Bukit Puncak',
            'created_at'=> date('Y-m-d H:i:s'),
         ]);
    }
}
