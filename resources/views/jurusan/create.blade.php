@extends('layout.main')

@section('title', 'Form Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Tambah Data Jurusan</h1>
            <form action="/jurusan" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">ID Jurusan</label>
                    <input type="text" name="id_jurusan" id="id" class="form-control" placeholder="Masukkan ID Jurusan">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" id="nama" class="form-control" placeholder="Masukkan Nama Jurusan">
                </div>
                <button type="submit" class="btn btn-success">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection