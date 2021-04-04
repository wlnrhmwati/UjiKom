@extends('layouts.app')
@section('content')
<div>
    <div class="container">
        <div class="row">
            <h3>New Biodata</h3>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops !!!</strong> Terjadi Kesalahan Input Data. <br>
            <ul>
                @foreach ($errors as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
    </div>
@endif

<form action="{{route('mhs.store')}}" method="post">
@csrf
    <div class="row">
        <div class="col-sm-8">
            <strong>Nama :</strong>
            <input type="text" name="Nama" class="form-control" placeholder="Nama">
        </div>
        <div class="col-sm-8">
            <strong>Gender :</strong>
            <input type="text" name="Gender" class="form-control" placeholder="Gender">
        </div>
        <div class="col-sm-8">
            <strong>Usia :</strong>
            <input type="text" name="Usia" class="form-control" placeholder="Usia">
        </div>
        <div class="col-sm-8">
            <strong>Alamat :</strong>
            <textarea class="form-control" placeholder="Alamat" name="Alamat" rows="4" cols="80"></textarea>
        </div>

        <div>
            <a href="{{route('mhs.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection