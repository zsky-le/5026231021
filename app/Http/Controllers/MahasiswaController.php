<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = DB::table('mahasiswa')->get();
        return view('latihansoalbb.mahasiswa', ['mahasiswa' => $data]);
    }

    public function view($nrp)
    {
        $mhs = DB::table('mahasiswa')->where('nrp', $nrp)->first();
        return view('latihansoalbb.mahasiswaview', ['mhs' => $mhs]);
    }

    public function edit($nrp)
    {
        $mhs = DB::table('mahasiswa')->where('nrp', $nrp)->first();
        return view('latihansoalbb.mahasiswaedit', ['mhs' => $mhs]);
    }

    public function update(Request $request, $nrp)
    {
        DB::table('mahasiswa')->where('nrp', $nrp)->update([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'ipk' => $request->ipk
        ]);

        return redirect('/mahasiswa');
    }
}
