@extends('halaman/tampilan')

@section('kontent')
<!-- Page Heading --> 

@if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<h6 class="m-0 font-weight-bold text-primary">Data Merk/Type Televisi</h6>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
<div class="card-body">
    <div class="table-responsive">
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<a href="/merk/create" class="btn btn-primary">+Tambah Data Merk/Type Televisi</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Asal</th>
            <th>Harga</th>
            <th>Ukuran Layar</th>
            <th>Kualitas Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php ($no = 1)
        @foreach ($data as $item)
        <tr>
            <th>{{ $no++ }}</th>
            <th>{{ $item->produk_tv }}</th>
            <th>{{ $item->asal_tv }}</th>
            <th>{{ $item->harga_tv }}</th>
            <th>{{ $item->ukuran_tv }}</th>
            <th>{{ $item->kualitas_tv }}</th>
            <td>
                <a class = 'btn btn-secondary btn-sm' href='{{ url('/merk/'.$item->produk_tv) }}'>Detail</a>
                <a class='btn btn-warning btn-sm' href='{{ url('/merk/'.$item->produk_tv.'/edit')}}'>Edit</a>

            <form onsubmit="return confirm('Yakin mau hapus data?')"
            class='d-inline' action="{{ '/merk/'.$item->produk_tv }}"method='post'>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit">Del</button>
            </td>      
        </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links('pagination::bootstrap-5') }}
@endsection