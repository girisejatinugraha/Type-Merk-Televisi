@extends('layout/project')

@section('kontent')
<a href='/mahasiswa' class="btn btn-secondary"><< kembali</a>
<form method="post" action="/mahasiswa" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">   
            <label for="nim_mhs" class="form-label">NIM Mahasiswa</label>
            <input type="text" class="form-control" name='nim_mhs' id="nim_mhs" value="{{ Session::get('nim_mhs') }}">
        </div>

        <div class="mb-3">
            <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name='nama_mhs' id="nama_mhs" value="{{ Session::get('nama_mhs') }}">
        </div>

        <div class="mb-3">
            <label for="ttl_mhs" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="ttl_mhs" value="{{ Session::get('ttl_mhs') }}"></input>
        </div>

        <div class="mb-3">
            <label for="alamat_mhs" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat_mhs" value="{{ Session::get('alamat_mhs') }}"></textarea>
        </div>

        <div class="mb-3">
            <label for="telpon_mhs" class="form-label">No Telpon</label>
            <input class="form-control" name="telpon_mhs" value="{{ Session::get('telpon_mhs') }}"></input>
        </div>

        <div class="mb-3">
            <label for="email_mhs" class="form-label">Email</label>
            <input class="form-control" name="email_mhs" value="{{ Session::get('email_mhs') }}"></input>
        </div>

        <div class="mb-3">
            <label for="kota_mhs" class="form-label">Kota</label>
            <input class="form-control" name="kota_mhs" value="{{ Session::get('kota_mhs') }}"></input>
        </div>

        <div class="mb-3">
            <label for="agama_mhs" class="form-label">Agama</label>
            <input class="form-control" name="agama_mhs" value="{{ Session::get('agama_mhs') }}"></input>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar"></input>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
</form>
@endsection