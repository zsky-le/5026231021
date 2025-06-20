@extends('template')

@section('content')

<h3>Counter</h3>

	<a href="/counter" class="btn btn-info"> Kembali</a>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-center">
        <h1 class="mb-4">Jumlah Kunjungan Halaman</h1>
        <div class="display-4 mb-3">{{ $jumlah }}</div>
        <a href="/" class="btn btn-primary">Refresh / Hitung Lagi</a>
    </div>


@endsection
