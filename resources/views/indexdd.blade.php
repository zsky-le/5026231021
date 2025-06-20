@extends('layouts.master')
@section('title', 'Data Karyawan')

@section('content')
<h2>Daftar Karyawan</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus?')">Hapus Data</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="/karyawan/tambah" class="btn btn-success mt-3">Tambah Data</a>
@endsection
