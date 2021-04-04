    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>Biodata Mahasiswa</h3>
            </div>

            <div class="col-sm-2">
                <a class="btn btn-sm btn-success" href="{{route('mhs.create')}}">Create New</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{"message"}}</p>
        </div>
        @endif

        <table class="table table-hover table-sm">
            <tr>
                <th width="60px"><b> No. </b></th>
                <th width="180px"><b>Nama Mahasiswa</b></th>
                <th><b>Gender</b></th>
                <th><b>Usia</b></th>
                <th><b>Alamat</b></th>
                <th width="180px">Action</th>
            </tr>


            @foreach ($mahasiswa as $mahasiswa)
            <tr>
                <td><b>{{++$i}}</b></td>
                <td>{{$mahasiswa->Nama}}</td>
                <td>{{$mahasiswa->Gender}}</td>
                <td>{{$mahasiswa->Usia}}</td>
                <td>{{$mahasiswa->Alamat}}</td>
                <td>
                    <form action="{{route('mhs.destroy', $mahasiswa->id)}}" method="post">
                        <a class="btn btn-sm btn-primary" href="{{route('mhs.show', $mahasiswa->id)}}"> Show </a>
                        <a class="btn btn-sm btn-warning" href="{{route('mhs.edit', $mahasiswa->id)}}"> Edit </a>

                        @csrf
                        @method ('DELETE')

                        <button type="submit" class=" btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @endsection
    </div>