@extends('layout/project')

@section('konten')
<h1>{{ $judul }}</h1>
<p>giri sejati nugraha bandung 16 november 2003 umur 19 tahun </p>
<p>
    <ul>
        <li>Email: {{ $kontak['email'] }}</li>
        <li>Youtube: {{ $kontak['youtube'] }}</li>
    </ul>
</p>
@endsection