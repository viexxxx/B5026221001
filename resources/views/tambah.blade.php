@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama pegawai">
            </div>
        </div>


		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan jabatan pegawai">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Umur</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukan umur pegawai">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-8">
            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat pegawai"></textarea>
            </div>
        </div>

		<input type="submit" class="btn btn-warning" value="Simpan Data">
	</form>
@endsection
