@extends('layout/project')
@include('eror/menu')
@section('kontent')

@if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="from-label">Email</label> <br>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="from-control">
            </div>
            <div class="mb-3">
                <label for="password" class="from-label">Password</label> <br>
                <input type="password" name="password" class="from-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
@endsection