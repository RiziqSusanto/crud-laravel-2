@extends('layout.main')

@section('title', 'Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Table Jurusan</h1>
        <a href="/jurusan/create" class="btn btn-primary my-3">Tambah Data</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="scope">No</th>
                    <th scope="scope">ID Jurusan</th>
                    <th scope="scope">Nama Jurusan</th>
                    <th scope="scope">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jurusan as $jrs)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$jrs->id_jurusan}}</td>
                    <td>{{$jrs->nama_jurusan}}</td>
                    <td>
                        <a href="/jurusan/{{$jrs->id_jurusan}}/edit" class="btn btn-md btn-warning">Edit</a>
                        <form action="/jurusan/{{$jrs->id_jurusan}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-md btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection