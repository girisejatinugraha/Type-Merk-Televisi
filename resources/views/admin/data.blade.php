@extends('halaman/tampilan')
@section('title', 'mahasiswa')

@section('kontent')
        <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                <a href="/mahasiswa/create" class="btn btn-primary">+Tambah Data Mahasiswa</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="card-body">
                            <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat Taggal Lahir</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Kota</th>
                            <th>Agama</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                                <th></th>
                                <th>22110329</th>
                                <th>Giri</th>
                                <th>Bandung 16 11 2003</th>
                                <th>Melong</th>
                                <th>082115623877</th>
                                <th>giri@gmail.com</th>
                                <th>Cimahi</th>
                                <th>Islam</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>221110222</th>
                                <th>Apang</th>
                                <th>Bandung 12 12 2003</th>
                                <th>Margaasih</th>
                                <th>082115644877</th>
                                <th>apang@gmail.com</th>
                                <th>Bandung</th>
                                <th>Islam</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>221110234</th>
                                <th>Anugrah</th>
                                <th>Bandung 16 10 2004</th>
                                <th>Pharmindo</th>
                                <th>082144623877</th>
                                <th>anugrah@gmail.com</th>
                                <th>Cimahi</th>
                                <th>Islam</th>
                            </tr>
                    </thead> 
@endsection