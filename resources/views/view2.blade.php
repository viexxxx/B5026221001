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
    <div class="row justify-content-center">
        <div class="col-6">
            <h3 class="text-center">View Kursi</h3>

        </div>
    </div>


    {{--
    <a class = "col mt-2" style="color:black">Nama :</a>
    <a style="padding-top: 6pt">{{ $p->pegawai_nama }} </a>
    --}}

    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            @foreach ($kursi as $p)
            <fieldset disabled>
                <form action="/kursi/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->kodekursi }}">
                    <div class = "form-group row mt-4">
                        <label class = "col-3 control-label">Merk Kursi :</label>
                        <label class = "col-9 control-label">{{ $p->merkkursi }}</label>
                    </div>
                    <div class = "form-group row mt-4">
                        <label class = "col-3 control-label">Stock Kursi :</label>
                        <label class = "col-9 control-label">{{ $p->stockkursi }}</label>
                    </div>
                    <div class = "form-group row mt-4">
                        <label class = "col-3 control-label">Ketersediaan :</label>
                        <label class = "col-9 control-label">{{ translateChar($p->tersedia) }}</label>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="row">
                <div class="col-9 text-center">
                    <a href="/kursi" class="btn btn-success w-25 p-2">OK</a>
                </div>
            </div>
        </div>
    </div>
    <h1> </h1>
@endsection
