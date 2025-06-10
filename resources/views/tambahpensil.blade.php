@extends('template')

@section('content')

<h3>Tambah Pensil</h3>
<a href="/pensil">Kembali</a><br><br>
<form action="/pensil/store" method="post">
    {{ csrf_field() }}
    Merk <input type="text" name="merkpensil"><br>
    Harga <input type="number" name="hargapensil"><br>
    Tersedia
    <select name="tersedia">
        <option value="1">Ya</option>
        <option value="0">Tidak</option>
    </select><br>
    Berat <input type="text" name="berat"><br>
    <input type="submit" value="Simpan">
</form>
@endsection
