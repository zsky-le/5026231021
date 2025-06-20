@extends('template')

@section('content')
<h2>Detail Mahasiswa</h2>
<ul class="list-group">
    <li class="list-group-item"><strong>NRP:</strong> {{ $mhs->nrp }}</li>
    <li class="list-group-item"><strong>Nama:</strong> {{ $mhs->nama }}</li>
    <li class="list-group-item"><strong>Jurusan:</strong> {{ $mhs->jurusan }}</li>
    <li class="list-group-item"><strong>IPK:</strong> {{ $mhs->ipk }}</li>
</ul>
<a href="/mahasiswa" class="btn btn-secondary mt-3">Kembali</a>
@endsection
