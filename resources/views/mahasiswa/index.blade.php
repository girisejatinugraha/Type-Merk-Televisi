@extends('halaman/tampilan')

@section('kontent')
@if (Session::get('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
@endif

<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
<div class="card-body">
    <div class="table-responsive">
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<a href="/mahasiswa/create" class="btn btn-primary">+Tambah Data Mahasiswa</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
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
    </thead>
    <tbody>
        @php ($no = 1)
        @foreach ($data as $item)
        <tr>
            <th>{{ $no++ }}</th>
            <td>
                @if ($item->gambar)
                    <img style="max-width: 50px;max-height:50px" scr="{{ url('gambar').'/'.$item->gambar }}"/>
                @endif
            </td>
            <th>{{ $item->nim_mhs }}</th>
            <th>{{ $item->nama_mhs }}</th>
            <th>{{ $item->ttl_mhs }}</th>
            <th>{{ $item->alamat_mhs }}</th>
            <th>{{ $item->telpon_mhs }}</th>
            <th>{{ $item->email_mhs }}</th>
            <th>{{ $item->kota_mhs }}</th>
            <th>{{ $item->agama_mhs }}</th> 
            <td>
                <a class='btn btn-secondary btn-sm' href='{{ url('/mahasiswa/'.$item->nim_mhs)}}'>Detail</a>
                <a class='btn btn-warning btn-sm' href='{{ url('/mahasiswa/'.$item->nim_mhs.'/edit')}}'>Edit</a>

            <form onsubmit="return confirm('Yakin mau hapus data?')"
            class='d-inline' action="{{ '/mahasiswa/'.$item->nim_mhs }}"method='post'>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit">Del</button>
            </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links('pagination::bootstrap-5') }}
@endsection
