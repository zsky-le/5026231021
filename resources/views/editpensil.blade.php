<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

<h3>Edit Pensil</h3>
<a href="/pensil">Kembali</a><br><br>
@foreach($pensil as $p)
<form action="/pensil/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->ID }}">
    Merk <input type="text" name="merkpensil" value="{{ $p->merkpensil }}"><br>
    Harga <input type="number" name="hargapensil" value="{{ $p->hargapensil }}"><br>
    Tersedia
    <select name="tersedia">
        <option value="1" {{ $p->tersedia ? 'selected' : '' }}>Ya</option>
        <option value="0" {{ !$p->tersedia ? 'selected' : '' }}>Tidak</option>
    </select><br>
    Berat <input type="text" name="berat" value="{{ $p->berat }}"><br>
    <input type="submit" value="Simpan">
    </form>
        @endforeach

</body>
</html>
