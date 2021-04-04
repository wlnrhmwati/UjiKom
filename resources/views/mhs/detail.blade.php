@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="cols-md-12">
            <h3>Detail Mahasiswa</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="cols-md-12">
            <div class="form-group">
                <strong>Nama : </strong> {{$mahasiswas->Nama}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cols-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin : </strong> {{$mahasiswas->Gender}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cols-md-12">
            <div class="form-group">
                <strong>Usia : </strong> {{$mahasiswas->Usia}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cols-md-12">
            <div class="form-group">
                <strong>Alamat: </strong> {{$mahasiswas->Alamat}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('mhs.index')}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
</div>
@endsection