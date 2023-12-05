@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <div class="row justify-content-center">
        <div class="col-6">
            <h3 class="text-center">View Pegawai</h3>

        </div>
    </div>


    {{--
    <a class = "col mt-2" style="color:black">Nama :</a>
    <a style="padding-top: 6pt">{{ $p->pegawai_nama }} </a>
    --}}

    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            @foreach ($pegawai as $p)
            <fieldset disabled>
                <form action="/pegawai/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    <div class = "form-group row mt-4">
                        <label class = "col-3 control-label">Nama :</label>
                        <label class = "col-9 control-label">{{ $p->pegawai_nama }}</label>
                    </div>
                    <div class = "form-group row mt-4">
                        <label class = "col-3 control-label">Jabatan :</label>
                        <label class = "col-9 control-label">{{ $p->pegawai_jabatan }}</label>
                    </div>
                    <div class = "form-group row mt-4">
                        <label class = "col-3 control-label">Umur :</label>
                        <label class = "col-9 control-label">{{ $p->pegawai_umur }}</label>
                    </div>
                    <div class = "form-group row mt-4">
                        <label class = "col-3 control-label">Alamat :</label>
                        <label class = "col-9 control-label">{{ $p->pegawai_alamat }}</label>
                    </div>
                </form>

            </fieldset>
            @endforeach
            <div class="row">
                <div class="col-9 text-center">
                    <a href="/pegawai" class="btn btn-success w-25 p-2">OK</a>
                </div>
            </div>

        </div>
    </div>
    <h1> </h1>
@endsection
