<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class Mahasiswacontroller extends Controller
{
    //
    function index()
    {
        //$data = mahasiswa::all();
        $data = mahasiswa::orderBy('nim_mhs', 'desc')->paginate(3);
        return view('mahasiswa/index')->with('data', $data);
    }
    function detail($id)
        {
           // return "<h1> Saya Mahasiswa Dari STMIK Mardira Dengan Nim $id";
           $data = mahasiswa::where('nim_mhs',$id)->first();
           return view('mahasiswa/show')->with('data',$data);
        }
}
