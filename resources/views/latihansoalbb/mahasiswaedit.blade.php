@extends('layouts.master')

@section('content')
<h2>Edit Mahasiswa</h2>
<form action="/mahasiswa/{{ $mhs->nrp }}/update" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="{{ $mhs->jurusan }}">
    </div>
    <div class="form-group">
        <label>IPK</label>
        <input type="text" name="ipk" class="form-control" value="{{ $mhs->ipk }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/mahasiswa" class="btn btn-secondary">Batal</a>
</form>
@endsection
