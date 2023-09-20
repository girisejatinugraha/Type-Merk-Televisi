<?php

namespace App\Http\Controllers;

use App\Models\tugas;
Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tugascontroller extends Controller
{
    //
    function index()
    {
        $data = tugas::orderBy('kanal_tv', 'desc')->paginate(1);
        return view('semester/index')->with('data', $data);
    }

    function detail($id)
    {
        $data = tugas::where('kanal_tv',$id)->first();
        return view('semester/show')->with('data', $data);
    }
}
