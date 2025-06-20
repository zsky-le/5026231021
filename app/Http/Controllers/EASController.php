<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EASController extends Controller
{
    public function index()
    {
        $data = DB::table('mykaryawan')->get();
        return view('easPweb.index', ['mykaryawan' => $data]);
    }

    public function view($kodepegawai)
    {
        $kry = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('easPweb.detailkaryawan', ['kry' => $kry]);
    }

    public function edit($kodepegawai)
    {
        $kry = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('easPweb.editkaryawan', ['kodepegawai' => $kry]);
    }

    public function update(Request $request, $kodepegawai)
    {
        DB::table('mykaryawan')->where('kodepegawai', $request -> $kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/eas');
    }
}
