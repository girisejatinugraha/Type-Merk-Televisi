@extends('layout/merk')

@section('kontent')
    <from method="post" action="/merk" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kanal_tv" class="form-label">Kanal</label>
            <input type="text" class="form-control" name="kanal_tv" id="kanal_tv" value="{{ Session::get('kanal_tv') }}"></input>
        </div>

        <div class="mb-3">
            <label for="lembaga_tv" class="form-label">Lembaga</label>
            <input type="text" class="form-control" name="lembaga_tv" id="lembaga_tv"value="{{ Session::get('lembaga_tv') }}" ></input>
        </div>

        <div class="mb-3">
            <label for="udara_tv" class="form-label">Udara</label>
            <input class="form-control" name="udara_tv" value="{{ Session::get('udara_tv') }}"></input>
        </div>

        <div class="mb-3">
            <label for="wilayah_tv" class="form-label">Wilayah</label>
            <input class="form-control" name="wilayah_tv" value="{{ Session::get('wilayah_tv') }}"></input>
        </div>

        <div class="mb-3">
            <label for="alamat_tv" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat_tv" value="{{ Session::get('alamat_tv') }}"></textarea>
        </div>

        <div class="mb-3">
            <buttom type="submit" class="btn btn-primary">SIMPAN</buttom>
@endsection