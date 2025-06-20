@extends('template')

@section('content')
<h2>mykaryawan</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Pegawai</th><th>Nama Lengkap</th><th>Divisi</th><th>Departemen</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mykaryawan as $kry)
        <tr>
            <td>{{ $kry->kodepegawai }}</td>
            <td>{{ $kry->namalengkap }}</td>
            <td>{{ $kry->divisi }}</td>
            <td>{{ $kry->departemen }}</td>
            <td>
                <a href="/eas/{{ $kry->kodepegawai }}/view" class="btn btn-info btn-sm">View</a>
                <a href="/eas/{{ $kry->kodepegawai }}/edit" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
