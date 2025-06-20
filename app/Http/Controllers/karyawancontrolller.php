<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('karyawan.tambah');
    }

    public function store(Request $request)
    {
        // Cek apakah kodepegawai sudah ada
        $cek = DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->exists();

        if ($cek) {
            return redirect('/karyawan/tambah')->with('error', 'Kode Pegawai sudah ada!');
        }

        // Simpan ke database
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan');
    }

    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/karyawan');
    }
}
