@extends('template')

@section('content')
<h2>Detail Karyawan</h2>
<ul class="list-group">
    <li class="list-group-item"><strong>Kode Pegawai:</strong> {{ $kry-> kodepegawai }}</li>
    <li class="list-group-item"><strong>Nama Lengkap:</strong> {{ $kry-> namalengkap }}</li>
    <li class="list-group-item"><strong>Divisi:</strong> {{ $kry-> divisi }}</li>
    <li class="list-group-item"><strong>Departemen:</strong> {{ $kry-> departemen }}</li>
</ul>
<a href="/eas" class="btn btn-secondary mt-3">Kembali</a>
@endsection
