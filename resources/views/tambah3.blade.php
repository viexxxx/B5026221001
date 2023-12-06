@extends('master')

@section('title', 'Data Kursi')

@section('konten')

	<h3>Data Kursi</h3>

	<a href="/kursi" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/kursi/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Merk Kursi</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="merkkursi" name="merkkursi" placeholder="Masukan Merk Kursi">
            </div>
        </div>


		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Stock Kursi</label>
            <div class="col-sm-8">
            <input type="Number" class="form-control" id="stockkursi" name="stockkursi" placeholder="Masukan Stock Kursi">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-1 control-label">Ketersediaan</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="yatersedia" value="1">
                    <label class="form-check-label" for="yatersedia">Ya</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="taktersedia" value="0">
                    <label class="form-check-label" for="taktersedia">Tidak</label>
                </div>
            </div>
        </div>

		<input type="submit" class="btn btn-warning" value="Simpan Data">
	</form>
@endsection
