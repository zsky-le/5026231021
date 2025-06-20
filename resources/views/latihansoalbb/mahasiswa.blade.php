@extends('template')

@section('content')
<h2>Daftar Mahasiswa</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>NRP</th><th>Nama</th><th>Jurusan</th><th>IPK</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nrp }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->ipk }}</td>
            <td>
                <a href="/mahasiswa/{{ $mhs->nrp }}/view" class="btn btn-info btn-sm">View</a>
                <a href="/mahasiswa/{{ $mhs->nrp }}/edit" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
