@extends('layout/uts')

@section('kontent')

<div>
    <a href="/tugas" class="btn btn-secondary">>>Kembali</a>
    <h1>{{$data->kanal_tv}}</h1>
    <p>
        <b>Lembaga : </b> {{$data->lembaga_tv}}
    </p>
    <p>
        <b>Udara :</b> {{$data->udara_tv}}
    </p>
    <p>
        <p>Wilayah :</b> {{$data->wilayah_tv}}
    </p>
    <p>
        <b>Alamat : </b> {{$data->alamat_tv}}
    </p>
</div>
@endsection