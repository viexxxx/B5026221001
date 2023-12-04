@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" required="required" id="nama" name="nama" placeholder="Masukan nama pegawai" value="{{ $p->pegawai_nama }}">
            </div>
        </div>


		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan jabatan pegawai" value="{{ $p->pegawai_jabatan }}" required="required">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Umur</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukan umur pegawai" value="{{ $p->pegawai_umur }}" required="required">
            </div>
        </div>

		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-8">
            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat pegawai" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
	@endsection
