<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table karyawan
		// $karyawan = DB::table('karyawan')->get();

        //pagination
        $karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');

	}

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		return redirect('/karyawan');
	}
}
