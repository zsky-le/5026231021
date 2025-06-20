@extends('template')

@section('content')

<body>
    <div class="container mt-4">
    <h2 class="mb-4">Pesan Chat</h2>
    <p>{!! $pesan !!}</p> {{-- tampilkan teks hasil konversi emoticon --}}
</div>
</body>

@endsection
