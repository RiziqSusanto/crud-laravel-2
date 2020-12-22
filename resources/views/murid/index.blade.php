@extends('layout.main')

@section('title', 'Kelas')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Tabel Kelas</h1>
            <a href="/murid/create" class="btn btn-primary my-3">Tambah Data</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Murid</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($murid as $mrd)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$mrd->nim}}</td>
                        <td>{{$mrd->nama}}</td>
                        <td>{{$mrd->kelas->nama_kelas}}</td>
                        <td>{{$mrd->jurusan->nama_jurusan}}</td>
                        <td>
                            <a href="/murid/{{$mrd->id_murid}}" class="btn btn-md btn-info">Detail Murid</a>
                            <a href="/murid/{{$mrd->id_murid}}/edit" class="btn btn-md btn-warning">Edit</a>
                            <form action="/murid/{{$mrd->id_murid}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-md btn-danger">Delete</button>
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