@extends('master')

@section('title', 'Data NilaiKuliah')

@section('konten')
	<h3>Data Nilai Mahasiswa</h3>

	<a href="/nilaikuliah" class="btn btn-primary"> Kembali</a>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label class="col-sm-2 control-label">NRP</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukan NRP Mahasiswa">
            </div>
        </div>

		<div class="form-group">
            <label class="col-sm-2 control-label">Nilai Angka</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="nilaiangka" name="nilaiangka" placeholder="Masukan Nilai Angka Mahasiswa">
            </div>
        </div>

		<div class="form-group row">
            <label class="col-sm-1 control-label">SKS</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sks" id="sks2" value="2">
                    <label class="form-check-label" for="sks4">2 SKS</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sks" id="sks3" value="3">
                    <label class="form-check-label" for="sks3">3 SKS</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sks" id="sks4" value="4">
                    <label class="form-check-label" for="sks4">4 SKS</label>
                </div>
            </div>
        </div>

		<input type="submit" class="btn btn-warning" value="Simpan Data">
	</form>
@endsection
