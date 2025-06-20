<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        // Ambil pesan dari database (record pertama)
        $pesan = DB::table('chat')->first()->pesan;

        // Daftar konversi emoticon ke gambar
        $emoticons = [
            ':))' => '1.png',
            ':3'  => '2.png',
            ':P'  => '3.png',
            ':C'  => '4.png',
            ';)'  => '5.png',
        ];

        // Pisahkan string berdasarkan spasi → array
        $kata_array = explode(' ', $pesan);

        // Ganti kata yang cocok dengan tag <img>
        foreach ($kata_array as &$kata) {
            if (array_key_exists($kata, $emoticons)) {
                $img_file = $emoticons[$kata];
                $kata = "<img src='/{$img_file}' width='30'>";
            }
        }

        // Gabungkan kembali ke string
        $pesan_konversi = implode(' ', $kata_array);

        return view('latihansoalaa.chat', ['pesan' => $pesan_konversi]);
    }
}
