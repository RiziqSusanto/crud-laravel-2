@extends('layout.main')

@section('title', 'Kelas')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Tabel Kelas</h1>
            <a href="/kelas/create" class="btn btn-primary my-3">Tambah Data</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $kls)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$kls->nama_kelas}}</td>
                        <td>
                            <a href="/kelas/{{$kls->id_kelas}}" class="btn btn-md btn-info">Detail Kelas</a>
                            <a href="/kelas/{{$kls->id_kelas}}/edit" class="btn btn-md btn-warning">Edit</a>
                            <form action="/kelas/{{$kls->id_kelas}}" method="post" class="d-inline">
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