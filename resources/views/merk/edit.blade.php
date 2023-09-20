@extends('layout/merk')

@section('kontent')
@if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
    <a href='/merk' class="btn btn-secondary"><< kembali</a>
    <form method="post" action="{{ '/merk/'.$data->produk_tv }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <h1>Produk: {{ $data->produk_tv }}</h1>

        <div class="mb-3">   
            <label for="produk_tv" class="form-label">Produk</label>
            <input type="text" class="form-control" name='produk_tv' id="produk_tv" value="{{ $data->produk_tv }}">
        </div>

        <div class="mb-3">
            <label for="asal_tv" class="form-label">Asal</label>
            <input type="text" class="form-control" name='asal_tv' id="asal_tv" value="{{ $data->asal_tv }}">
        </div>

        <div class="mb-3">
            <label for="harga_tv" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga_tv" value="{{ $data->harga_tv }}"></input>
        </div>

        <div class="mb-3">
            <label for="ukuran_tv" class="form-label">Ukuran Layar</label>
            <input class="form-control" name="ukuran_tv"value="{{ $data->ukuran_tv }}" ></input>
        </div>

        <div class="mb-3">
            <label for="kualitas_tv" class="form-label">Kualitas Gambar</label>
            <input class="form-control" name="kualitas_tv"value="{{ $data->kualitas_tv }}" ></input>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
@endsection