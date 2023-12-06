<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KursiController extends Controller
{
	public function index3()
	{
		//$pegawai = DB::table('pegawai')->get();
		$kursi = DB::table('kursi')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('index3',['kursi' => $kursi]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah3()
	{

		// memanggil view tambah
		return view('tambah3');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kursi')->insert([
			'merkkursi' => $request->merkkursi,
			'stockkursi' => $request->stockkursi,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kursi');

	}

	// method untuk edit data pegawai
	public function edit2($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kursi = DB::table('kursi')->where('kodekursi',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit2',['kursi' => $kursi]);

	}


	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('kursi')->where('kodekursi',$request->id)->update([
			'merkkursi' => $request->merkkursi,
			'stockkursi' => $request->stockkursi,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kursi');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kursi')->where('kodekursi',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kursi');
	}
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kursi = DB::table('kursi')
					->where('merkkursi','like',"%".$cari."%")
                    ->orderBy('merkkursi', 'asc')
					->paginate();

    		// mengirim data pegawai ke view index
		return view('index3',['kursi' => $kursi, 'cari' => $cari]);

	}

    public function view2($id){
        // mengambil data dari table pegawai sesuai id
        $kursi = DB::table('kursi')
        ->where('kodekursi', $id)
        ->get();

        return view('view2', ['kursi' => $kursi]);
    }

}
