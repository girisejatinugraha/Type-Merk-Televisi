<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$data = mahasiswa::all();
        $data = mahasiswa::orderBy('nim_mhs', 'desc')->paginate(3);
        return view('mahasiswa/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa/create');
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
            'nim_mhs' => 'required|numeric',
            'nama_mhs' => 'required',
            'ttl_mhs' => 'required',
            'alamat' => 'required',
            'telpon_mhs' => 'required',
            'email_mhs' => 'required',
            'kota_mhs' => 'required',
            'agama_mhs' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png,gif',

        ], [
            'nim_mhs.required' => 'Nomor NIM wajib diisi',
            'nim_mhs.numeric' => 'Nomor NIM wajib diisi dalam angka',
            'nama_mhs.required' => 'Nama wajib diisi',
            'ttl_mhs.required' => 'Ttl wajib diisi',
            'alamat_mhs.required' => 'Alamat wajib diisi',
            'telpon_mhs.required' => 'Telepon wajib diisi',
            'email_mhs.required' => 'Email wajib diisi',
            'kota_mhs.required' => 'Kota wajib diisi',
            'agama_mhs.required' => 'Agama wajib diisi',
            'foto.mimes' => 'gambar hanya dapat upload file JPEG, JPG, PNG, dan GIF'
        ]);
        //
        Session::flash('nim_mhs', $request->nim_mhs);
        Session::flash('nama_mhs', $request->nama_mhs);
        Session::flash('ttl_mhs', $request->ttl_mhs);
        Session::flash('alamat', $request->alamat);
        Session::flash('telpon_mhs', $request->telpon_mhs);
        Session::flash('email_mhs', $request->email_mhs);
        Session::flash('kota_mhs', $request->kota_mhs);
        Session::flash('agama_mhs', $request->agama_mhs);

        $foto_file = $request->file('gambar');
        $foto_ekstensi = $foto_file->extension();
        $gambar_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('gambar'),$gambar_nama);

        $data =[
            'nim_mhs' => $request->input('nim_mhs'),
            'nama_mhs' => $request->input('nama_mhs'),
            'ttl_mhs' => $request->input('ttl_mhs'),
            'alamat' => $request->input('alamat'),
            'telpon_mhs' => $request->input('telpon_mhs'),
            'email_mhs' => $request->input('email_mhs'),
            'kota_mhs' => $request->input('kota_mhs'),
            'agama_mhs' => $request->input('agama_mhs'),
        ];
        mahasiswa::create($data);
        return redirect('mahasiswa')->with('success', 'Berhasil memasukan data');
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
        //return "<h1> Saya Mahasiswa Dari STMIK Mardira Dengan Nim $id";
           $data = mahasiswa::where('nim_mhs',$id)->first();
           return view('mahasiswa/show')->with('data',$data);
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
        $data = mahasiswa::where('nim_mhs', $id)->first();
        return view('mahasiswa/edit')->with('data', $data);
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
            'nim_mhs' => 'required|numeric',
            'nama_mhs' => 'required',
            'ttl_mhs' => 'required',
            'alamat' => 'required',
            'telpon_mhs' => 'required',
            'email_mhs' => 'required',
            'kota_mhs' => 'required',
            'agama_mhs' => 'required',

        ], [
            'nim_mhs.required' => 'Nomor NIM wajib diisi',
            'nim_mhs.numeric' => 'Nomor NIM wajib diisi dalam angka',
            'nama_mhs.required' => 'Nama wajib diisi',
            'ttl_mhs.required' => 'Ttl wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'telpon_mhs.required' => 'Telepon wajib diisi',
            'email_mhs.required' => 'Email wajib diisi',
            'kota_mhs.required' => 'Kota wajib diisi',
            'agama_mhs.required' => 'Agama wajib diisi',
        ]);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'mimes:jpeg,jpg,png,gif'
            ], [
                'gambar.mimes' => 'gambar hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF'
            ]);
            $foto_file = $request->file('gambar');
            $foto_ekstensi =$foto_file->extension();
            $gambar_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('gambar'), $gambar_nama); //sudah terupload ke direktori
    
            $data_gambar = mahasiswa::where('nim_mhs', $id)->first();
    
            //printa menghapus data gambar lama secara otomatis
            File::delete(public_path('gambar') . '/' . $data_gambar->gambar);
    
            $data = [
            'foto' =>$gambar_nama
            ];
            $data['gambar'] = $gambar_nama;
        }

        $data =[
            'nim_mhs' => $request->input('nim_mhs'),
            'nama_mhs' => $request->input('nama_mhs'),
            'ttl_mhs' => $request->input('ttl_mhs'),
            'alamat' => $request->input('alamat'),
            'telpon_mhs' => $request->input('telpon_mhs'),
            'email_mhs' => $request->input('email_mhs'),
            'kota_mhs' => $request->input('kota_mhs'),
            'agama_mhs' => $request->input('agama_mhs'),
        ];
        mahasiswa::where('nim_mhs', $id)->update($data);
        return redirect('/mahasiswa')->with('success', 'Berhasil melakukan update data');
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
        //$data = mahasiswa::where('nim_mhs', $id)->first();
        //File::delete(public_path('gambar') . '/' . $data->gambar);

        mahasiswa::where('nim_mhs', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Berhasil hapus data');
    }

    public function tampilan(){
        return view ('halaman/tampilan');
    }

}
