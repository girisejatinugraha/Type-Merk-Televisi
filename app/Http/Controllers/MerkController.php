<?php

namespace App\Http\Controllers;

use App\Models\merk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = merk::orderBy('produk_tv','desc')->paginate(3);
        return view('merk/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('merk/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'produk_tv' => 'required',
            'asal_tv' => 'required',
            'harga_tv' => 'required|numeric',
            'ukuran_tv' => 'required',
            'kualitas_tv' => 'required',
        ], [
            'produk_tv.required' => 'produk wajib diisi',
            'asal_tv.required' => 'asal wajib diisi',
            'harga_tv.required' => 'harga Wajib diisi',
            'harga_tv.numeric' => 'Harga wajib diisi dalam angka',
            'ukuran_tv.required' => 'Ukuran Layar wajib diisi',
            'kualitas_tv.required' =>'kualitas Gambar wajib diisi',
        ]);
        //
        Session::flash('produk_tv', $request->produk_tv);
        Session::flash('asal_tv', $request->asal_tv);
        Session::flash('harga_tv', $request->harga_tv);
        Session::flash('ukuran_tv', $request->ukuran_tv);
        Session::flash('kualitas_tv', $request->kualitas_tv);
        
        $data =[
            'produk_tv' => $request->input('produk_tv'),
            'asal_tv' => $request->input('asal_tv'),
            'harga_tv' => $request->input('harga_tv'),
            'ukuran_tv' => $request->input('ukuran_tv'),
            'kualitas_tv' => $request->input('kualitas_tv'),
        ];
        merk::create($data);
        return redirect('merk')->with('success', 'Berhasil memasukan data');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = merk::where('produk_tv',$id)->first();
        return view('merk/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = merk::where('produk_tv', $id)->first();
        return view('merk/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'produk_tv' => 'required',
            'asal_tv' => 'required',
            'harga_tv' => 'required',
            'ukuran_tv' => 'required',
            'kualitas_tv' => 'required',
        ], [
            'produk_tv.required' => 'produk wajib diisi',
            'asal_tv.required' => 'asal wajib diisi',
            'harga_tv.required' => 'harga Wajib diisi',
            'ukuran_tv.required' => 'Ukuran Layar wajib diisi',
            'kualitas_tv.required' =>'kualitas Gambar wajib diisi',
        ]);
        $data =[
            'produk_tv' => $request->input('produk_tv'),
            'asal_tv' => $request->input('asal_tv'),
            'harga_tv' => $request->input('harga_tv'),
            'ukuran_tv' => $request->input('ukuran_tv'),
            'kualitas_tv' => $request->input('kualitas_tv'),
        ];
        merk::where('produk_tv', $id)->update($data);
        return redirect('/merk')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        merk::where('produk_tv',$id)->delete();
        return redirect('/merk')->with('success', 'Berhasil hapus data');
    }
}
