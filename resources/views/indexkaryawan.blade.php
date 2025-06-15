@extends('template')

@section('content')

    <h3>Data Karyawan</h3>
    <br>

	<table class = "table table-striped">
		<tr>
            <th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
            <td>{{ $k->kodepegawai }}</td>
			<td style="text-transform: uppercase;">{{ $k->namalengkap }}</td>
			<td>{{ $k->divisi }}</td>
			<td style="text-transform: lowercase;">{{ $k->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
    <br>
    <br>
{{-- pagination     --}}
{{ $karyawan->links() }}
@endsection
