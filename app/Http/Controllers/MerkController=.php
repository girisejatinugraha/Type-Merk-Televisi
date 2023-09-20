<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    //
    function index()
    {
        $data = merk::orderBy('produk_tv','desc')->paginate(3);
        return view('tengah/index')->with('data', $data);
    }
    function detail($id)
    {
        $data = merk::where('produk_tv',$id)->first();
        return view('tengah/show')->with('data', $data);
    }
}
