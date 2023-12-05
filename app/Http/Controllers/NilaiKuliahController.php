<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
	public function index2()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
		$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('index2',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah2()
	{
		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'nrp' => $request->nrp,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
					->where('pegawai_nama','like',"%".$cari."%")
                    ->orderBy('pegawai_nama', 'asc')
					->paginate();

    		// mengirim data pegawai ke view index
		return view('index2',['pegawai' => $pegawai, 'cari' => $cari]);

	}

}
