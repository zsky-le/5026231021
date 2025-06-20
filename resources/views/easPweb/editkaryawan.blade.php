@extends('template')

@section('content')
<h2>Edit Karyawan</h2>
<form action="/eas/{{ $kodepegawai->kodepegawai }}/update" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" value="{{ $kodepegawai->namalengkap }}">
    </div>
    <div class="form-group">
        <label>Divisi</label>
        <input type="text" name="jurusan" class="form-control" value="{{ $kodepegawai->divisi }}">
    </div>
    <div class="form-group">
        <label>Departemen</label>
        <input type="text" name="ipk" class="form-control" value="{{ $kodepegawai->departemen }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/mahasiswa" class="btn btn-secondary">Batal</a>
</form>
@endsection
