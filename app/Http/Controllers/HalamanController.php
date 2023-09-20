<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    function index()
    {
        return view("halaman/halaman");
    }
    function tentang()
    {
        return view("halaman/tentang");
    }
    function kontak()
    {
        $data = [
            'judul' => 'Ini Adalah Halaman Kontak',
            'kontak' => [
                'email' => 'giri.com',
                'youtube' => 'girisejati'
            ]
            ];
        return view("halaman/kontak")->with($data);
    }
}
