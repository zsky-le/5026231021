<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel kategori
        $kategori = DB::table('kategori')->get();
        return view('latihansoalcc.index', ['kategori' => $kategori]);
    }

    public function kirim(Request $request)
    {
        // Ambil ID kategori yang dipilih dari form
        $id = $request->kategori;

        return view('latihansoalcc.hasil', ['id' => $id]);
    }
}
