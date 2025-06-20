@extends('layouts.master')
@section('title', 'Tambah Karyawan')

@section('content')
<h2>Tambah Data Karyawan</h2>

@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form action="/karyawan/store" method="POST" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label>Kode Pegawai</label>
        <input type="text" name="kodepegawai" class="form-control" required maxlength="5">
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="namalengkap" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Divisi</label>
        <input type="text" name="divisi" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Departemen</label>
        <input type="text" name="departemen" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/karyawan" class="btn btn-secondary">Kembali</a>
</form>
@endsection
