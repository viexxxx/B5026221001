@extends('master')

@section('title', 'Data Kursi')

@section('konten')
@php
    function translateChar($char){
        if($char==1){
            return 'Ya';
        }
        else if($char==0){
            return 'Tidak';
        }
        else{
            return 'Tidak Valid';
        }
    }
@endphp
	<h3>Data Kursi</h3>

	<a href="/kursi/tambah" class="btn btn-primary"> + Tambah Kursi Baru</a>

	<br/>
	<p>Cari Data Kursi :</p>
	<form action="/kursi/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Kursi .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Kursi</th>
			<th>Merk Kursi</th>
			<th>Stock Kursi</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($kursi as $p)
		<tr>
			<td>{{ $p->kodekursi }}</td>
			<td>{{ $p->merkkursi }}</td>
			<td>{{ $p->stockkursi }}</td>
			<td>{{  translateChar($p->tersedia) }}</td>
			<td>
				<a href="/kursi/view2/{{ $p->kodekursi }}" class="btn btn-success">View</a>
				|
				<a href="/kursi/edit2/{{ $p->kodekursi }}" class="btn btn-warning">Edit</a>
				|
				<a href="/kursi/hapus/{{ $p->kodekursi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $kursi->links() }}
@endsection
