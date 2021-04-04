@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Edit Data</h3>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops </strong> Terjadi Kesalahan Input Data. <br>
            <ul>
                @foreach ($errors as $errors)
                <li>{{$errors}}</li>
                @endforeach
            </ul>
    </div>
@endif

<form action="{{route('mhs.update', $mahasiswas->id)}}" method="post">
@csrf
@method('PUT')
    <div class="row">
        <div class="col-sm-8">
            <strong>Nama : </strong>
            <input type="text" name="Nama" class="form-control" value="{{$mahasiswas->Nama}}">
        </div>
        <div class="col-sm-8">
            <strong>Gender : </strong>
            <input type="text" name="Gender" class="form-control" value="{{$mahasiswas->Gender}}">
        </div>
        <div class="col-sm-8">
            <strong>Usia : </strong>
            <input type="text" name="Usia" class="form-control" value="{{$mahasiswas->Usia}}">
        </div>
        <div class="col-sm-8">
            <strong>Alamat : </strong>
            <textarea class="form-control" name="Alamat" rows="4" cols="80" >{{$mahasiswas->Alamat}}</textarea>
        </div>

        <div class="col=md-12">
            <a href="{{route('mhs.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection