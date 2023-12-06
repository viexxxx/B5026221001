@extends('master')

@section('title', 'Data Kursi')

@section('konten')
	<h3>Edit Kursi</h3>

	<a href="/kursi" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($kursi as $p)
	<form action="/kursi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodekursi }}"> <br/>
		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Merk Kursi</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" required="required" id="merkkursi" name="merkkursi" placeholder="Masukan Merk Kursi" value="{{ $p->merkkursi }}">
            </div>
        </div>


		<div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">Stock Kursi</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="stockkursi" name="stockkursi" placeholder="Masukan Stock Kursi" value="{{ $p->stockkursi }}" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-1 control-label">Ketersediaan</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="1">
                    <label class="form-check-label" for="tersedia">Ya</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="taktersedia" value="0">
                    <label class="form-check-label" for="taktersedia">Tidak</label>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
	@endsection
