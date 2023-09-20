@extends('halaman/tampilan')
@section('title', 'Merk')

@section('kontent')
<!-- Page Heading --> 
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<h6 class="m-0 font-weight-bold text-primary">Data Merk/Type Televisi</h6>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
<a href="/tengah/tambah" class="btn btn-primary">+Tambah Data Merk/Type Televisi</a>
<div class="card-body">
    <div class="table-responsive">
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
            <tr>
                <th>Produk</th>
                <th>Asal</th>
                <th>Harga</th>
                <th>Ukuran Layar</th>
                <th>Kualitas Gambar</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>Aqua Japan</td>
                <td>Jepang</td>
                <td>1,9 juta</td>
                <td>32 Inci</td>
                <td>HD</td>
            </tr>
            <tr>
                <td>Coocaa</td>
                <td>Cina</td>
                <td>1,5 Juta</td>
                <td>44 Inci</td>
                <td>HD</td>
            </tr>
            <tr>
                <td>Samsung</td>
                <td>Korea Selatan</td>
                <td>2,4 juta</td>
                <td>32 Inci</td>
                <td>HD</td>
            </tr>
        </thead>
</table>
@endsection