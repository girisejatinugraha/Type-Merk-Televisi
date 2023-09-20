@extends('layout/merk')

@section('kontent')
<a href='/merk' class="btn btn-secondary"><< kembali</a>
<from method="post" action="/merk" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="produk_tv" class="form-label">Produk</label>
        <input type="text" class="form-control" name="produk_tv" id="produk_tv" value="{{ Session::get('produk_tv') }}"></input>
    </div>

    <div class="mb-3">
        <label for="asal_tv" class="form-label">Asal</label>
        <input type="text" class="form-control" name="asal_tv" id="asal_tv"value="{{ Session::get('asal_tv') }}" ></input>
    </div>

    <div class="mb-3">
        <label for="harga_tv" class="form-label">Harga</label>
        <input class="form-control" name="harga_tv" value="{{ Session::get('harga_tv') }}"></input>
    </div>

    <div class="mb-3">
        <label for="ukuran_tv" class="form-label">Ukuran Layar</label>
        <input class="form-control" name="ukuran_tv" value="{{ Session::get('ukuran_tv') }}"></input>
    </div>

    <div class="mb-3">
        <label for="kualitas_tv" class="form-label">Kualitas Gambar</label>
        <input class="form-control" name="kualitas_tv" value="{{ Session::get('kualitas_tv') }}"></input>
    </div>

    <div class="mb-3">
        <buttom type="submit" class="btn btn-primary">SIMPAN</buttom>
    </div>
</from>

@endsection