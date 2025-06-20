@extends('template')

@section('content')
<h2>Hasil Pilihan</h2>
<p>ID Kategori yang kamu pilih adalah: <strong>{{ $id }}</strong></p>
<a href="/kategori" class="btn btn-secondary">Kembali</a>
@endsection
