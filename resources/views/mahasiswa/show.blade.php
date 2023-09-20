@extends('layout/project')

@section('kontent')

<div>
    <a href="/mahasiswa" class="btn btn-secondary">>>Kembali</a>
    <h1>{{$data->nim_mhs}}</h1>
    <p>
        <b>Nama : </b> {{$data->nama_mhs}}
    </p>
    <p>
        <b>Tempat Tanggal Lahir :</b> {{$data->ttl_mhs}}
    </p>
    <p>
        <p>Alamat :</b> {{$data->alamat_mhs}}
    </p>
    <p>
        <b>Telepon : </b> {{$data->telpon_mhs}}
    </p>
    <p>
        <b>Email:</b> {{$data->email_mhs}}
    </p>
    <p>
        <b>Kota :</b> {{$data->kota_mhs}}
    </p>
    <p>
        <b>Agama :</b> {{$data->agama_mhs}}
    </p>
</div>
@endsection