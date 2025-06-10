<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    public function index()
    {
        $pensil = DB::table('pensil')->paginate(10);
        return view('indexpensil', ['pensil' => $pensil]);
    }

    public function tambah()
    {
        return view('tambahpensil');
    }

    public function store(Request $request)
    {
        DB::table('pensil')->insert([
            'merkpensil' => $request->merkpensil,
            'hargapensil' => $request->hargapensil,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/pensil');
    }

    public function edit($id)
    {
        $pensil = DB::table('pensil')->where('ID', $id)->get();
        return view('editpensil', ['pensil' => $pensil]);
    }

    public function update(Request $request)
    {
        DB::table('pensil')->where('ID', $request->id)->update([
            'merkpensil' => $request->merkpensil,
            'hargapensil' => $request->hargapensil,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/pensil');
    }

    public function hapus($id)
    {
        DB::table('pensil')->where('ID', $id)->delete();
        return redirect('/pensil');
    }
}
