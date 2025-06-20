<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index()
    {
        // Tambahkan nilai jumlah +1
        DB::table('counter')->where('id', 1)->increment('jumlah');

        // Ambil nilai jumlah yang baru
        $jumlah = DB::table('counter')->where('id', 1)->value('jumlah');

        // Kirim ke tampilan
        return view('latihansoalff.counter', ['jumlah' => $jumlah]);
    }
}
