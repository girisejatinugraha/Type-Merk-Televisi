@extends('layout/project')

@section('kontent')

@if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
    <div class="w-50 text-center border rounded px-3 py-3 mx-auto">
        <h1>Selamat Datang</h1>
        <p>Silahkan login atau register untuk masuk ke Dashboard</p>
        <a href="/sesi" class="btn btn-primary btn-lg">LOGIN</a>
        <a href="/sesi/register" class="btn btn-success btn-lg">REGISTER</a>
    </div>
@endsection