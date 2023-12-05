@extends('master')

@section('title', 'Data NilaiKuliah')

@section('konten')

	<h3>Data Nilai Mahasiswa</h3>
	<a href="/nilaikuliah/tambah2" class="btn btn-primary"> + Tambah Pegawai Baru</a>
    <h3> </h3>
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nrp }}</td>
			<td>{{ $p->nilaiangka }}</td>
			<td>{{ $p->sks }}</td>
			<td>
                @php
                    if( $p->nilaiangka <=40) {
                        echo 'D';
                    } elseif ($p->nilaiangka >= 41 && $p->nilaiangka <= 60) {
                        echo 'C';
                    } elseif ($p->nilaiangka >= 61 && $p->nilaiangka <= 80) {
                        echo 'B';
                    } elseif ($p->nilaiangka >= 81) {
                        echo 'A';
                    }
                @endphp
            </td>
            <td>
                @php
                    echo ($p->nilaiangka * $p->sks);
                @endphp
            </td>
		</tr>
		@endforeach
	</table>
@endsection
