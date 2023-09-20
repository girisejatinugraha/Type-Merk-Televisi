@extends('layout/uts')

@section('kontent')
<h1>Data Stasiun TV</h1>
<a href='/dashboard' class="btn btn-secondary"><< kembali</a> <br> <br> <br>
<a href="/semester/tambah" class="btn btn-primary">+Tambah Data Stasiun TV</a>
<table class="table">
    <thead>
        <tr>
            <th>Kanal</th>
            <th>Lembaga</th>
            <th>Udara</th>
            <th>Wilayah</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th>{{ $item->kanal_tv }}</th>
            <th>{{ $item->lembaga_tv }}</th>
            <th>{{ $item->udara_tv }}</th>
            <th>{{ $item->wilayah_tv }}</th>
            <th>{{ $item->alamat_tv }}</th>
            <td>
                <a class = 'btn btn-secondary btn-sm' href='{{ url('/tugas/'.$item->kanal_tv) }}'>Detail</a>
                <a class = 'btn btn-warning btn-sm' href='{{ url('/tugas/'.$item->kanal_tv. '/edit') }}'>Edit</a>

            <from onsubmit="return confirm('Yakin mau hapus data?')"
            class='d-inline' action="{{ '/tugas/'.$item->kanal_tv }}"method='post'>
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