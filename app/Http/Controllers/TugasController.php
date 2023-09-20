<?php

namespace App\Http\Controllers;

use App\Models\merk;
use App\Models\tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = tugas::orderBy('kanal_tv', 'desc')->paginate(3);
        return view('semester/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('semester/tambah');
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
            'kanal_tv' => 'required|numeric',
            'lembaga_tv' => 'required',
            'udara_tv' => 'required',
            'wilayah_tv' => 'required',
            'alamat_tv' => 'required',

        ], [
            'kanal_tv.required' => 'kanal wajib diisi',
            'lembaga_tv.required' => 'lembaga wajib diisi',
            'udara_tv.required' => 'udara Wajib diisi',
            'wilayah_tv.required' => 'wilayah wajib diisi',
            'alamat_tv.required' =>'alamat wajib diisi',
        ]);
        //
        Session::flash('kanal_tv', $request->kanal_tv);
        Session::flash('lembaga_tv', $request->lembaga_tv);
        Session::flash('udara_tv', $request->udara_tv);
        Session::flash('wilayah_tv', $request->wilayah_tv);
        Session::flash('alamat_tv', $request->alamat_tv);

        $data =[
            'kanal_tv' => $request->input('kanal_tv'),
            'lembaga_tv' => $request->input('lembaga_tv'),
            'udara_tv' => $request->input('udara_tv'),
            'wilayah_tv' => $request->input('wilayah_tv'),
            'alamat_tv' => $request->input('alamat_tv'),
        ];
        tugas::create($data);
        return redirect('tugas')->with('success', 'Berhasil memasukan data');
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
        $data = tugas::where('kanal_tv',$id)->first();
        return view('semester/show')->with('data', $data);
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
        $data = tugas::where('kanal_tv', $id)->first();
        return view('semester/edit')->with('data', $data);
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
            'kanal_tv' => 'required|numeric',
            'lembaga_tv' => 'required',
            'udara_tv' => 'required',
            'wilayah_tv' => 'required',
            'alamat_tv' => 'required',

        ], [
            'kanal_tv.required' => 'kanal wajib diisi',
            'lembaga_tv.required' => 'lembaga wajib diisi',
            'udara_tv.required' => 'udara Wajib diisi',
            'wilayah_tv.required' => 'wilayah wajib diisi',
            'alamat_tv.required' =>'alamat wajib diisi',
        ]);
        $data =[
            'kanal_tv' => $request->input('kanal_tv'),
            'lembaga_tv' => $request->input('lembaga_tv'),
            'udara_tv' => $request->input('udara_tv'),
            'wilayah_tv' => $request->input('wilayah_tv'),
            'alamat_tv' => $request->input('alamat_tv'),
        ];
        tugas::where('kanal_tv',$id)->update();
        return redirect('/tugas')->with('success','Berhasil update data');
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
        tugas::where('kanal_tv',$id)->delete();
        return redirect('/tugas')->with('success', 'Berhasil hapus data');
    }
}
