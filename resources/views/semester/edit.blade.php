@extends('layout/uts')

@section('kontent')
    <a href='/tugas' class="btn btn-secondary"><< kembali</a>
    <form method="post" action="{{ '/tugas/'.$data->kanal_tv }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <h1>Kanal: {{ $data->kanal_tv }}</h1>
        </div>
        <div class="mb-3">   
            <label for="kanal_tv" class="form-label">Kanal</label>
            <input type="text" class="form-control" name='kanal_tv' id="kanal_tv" value="{{ $data->kanal_tv }}"></input>
        </div>

        <div class="mb-3">
            <label for="lembaga_tv" class="form-label">Lembaga</label>
            <input type="text" class="form-control" name='lembaga_tv' id="lembaga_tv" value="{{ $data->lembaga_tv }}"></input>
        </div>

        <div class="mb-3">
            <label for="udara_tv" class="form-label">Udara</label>
            <input type="text" class="form-control" name="udara_tv" value="{{ $data->udara_tv }}"></input>
        </div>

        <div class="mb-3">
            <label for="wilayah_tv" class="form-label">Wilayah</label>
            <input class="form-control" name="wilayah_tv"value="{{ $data->wilayah_tv }}" ></input>
        </div>

        <div class="mb-3">
            <label for="alamat_tv" class="form-label">Alamat</label>
            <input class="form-control" name="alamat_tv"value="{{ $data->alamat_tv }}" ></input>
        </div>
        <div class="mb-3">
            <buttom type="submit" class="btn btn-primary">SIMPAN</buttom>
@endsection