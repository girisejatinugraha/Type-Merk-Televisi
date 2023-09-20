@extends('layout/uts')

@section('kontent')

<div>
    <a href="/merk" class="btn btn-secondary">>>Kembali</a>
    <h1>{{$data->produk_tv}}</h1>
    <p>
        <b>Asal : </b> {{$data->asal_tv}}
    </p>
    <p>
        <b>Harga :</b> {{$data->harga_tv}}
    </p>
    <p>
        <p>Ukuran Layar :</b> {{$data->ukuran_tv}}
    </p>
    <p>
        <b>Kualitas Gambar : </b> {{$data->kualitas_tv}}
    </p>
</div>
@endsection