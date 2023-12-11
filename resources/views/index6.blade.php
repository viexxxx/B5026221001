@extends('master2')

@section('title','Counter')

@section('konten')
<table class="table table-striped table-hover">
    <h2>Anda telah membuka URL ini sebanyak {{ $Jumlah }} kali</h2>

    <br/>
    <br/>
</table>

@endsection
