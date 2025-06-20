@extends('template')

@section('content')
<h2>Pilih Kategori Produk</h2>
<form action="/kategori/kirim" method="POST">
    @csrf
    <div class="form-group">
        <label for="kategori">Kategori:</label>
        <select name="kategori" class="form-control" required>
            <option value="" disabled selected>-- Pilih Kategori --</option>
            @foreach($kategori as $kat)
                <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-2">KIRIM</button>
</form>
@endsection
