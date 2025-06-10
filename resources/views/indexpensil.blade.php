@extends('template')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Data Pensil</h4>
        </div>
        <div class="card-body">
            <a href="/pensil/tambah" class="btn btn-success mb-3">
                <i class="fas fa-plus-circle"></i> Tambah Pensil Baru
            </a>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th>Merk</th>
                            <th>Harga</th>
                            <th>Tersedia</th>
                            <th>Berat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pensil as $p)
                        <tr class="text-center align-middle">
                            <td>{{ $p->merkpensil }}</td>
                            <td>Rp {{ number_format($p->hargapensil, 0, ',', '.') }}</td>
                            <td>
                                @if($p->tersedia)
                                    <span class="badge badge-success">Ya</span>
                                @else
                                    <span class="badge badge-secondary">Tidak</span>
                                @endif
                            </td>
                            <td>{{ $p->berat }} gr</td>
                            <td>
                                <a href="/pensil/edit/{{ $p->ID }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="/pensil/hapus/{{ $p->ID }}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $pensil->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
