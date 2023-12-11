<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index6()
    {
        // Mengambil data jumlah dari tabel "counter"
        $Jumlah = \DB::table('Counter')->first()->Jumlah;

        // Melakukan increment pada jumlah
        $Jumlah++;

        // Mengupdate data jumlah di tabel "counter"
        \DB::table('Counter')->update(['Jumlah' => $Jumlah]);

        // Mengembalikan data jumlah
        return view('index6', compact('Jumlah'));
    }
}
