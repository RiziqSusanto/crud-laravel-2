@extends('layout.main')

@section('title', 'Form Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Tambah Data</h1>
            <form action="/kelas" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">ID Kelas</label>
                    <input type="text" class="form-control" id="id" name="id_kelas" placeholder="Masukkan ID Kelas">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama" name="nama_kelas" placeholder="Masukkan ID Kelas">
                </div>
                <div class="form-group">
                    <label for="jurusan_id">ID Jurusan</label>
                    <select name="jurusan_id" id="jurusan_id" class="form-control">
                        <option >--- Jurusan ---</option>
                        @foreach($jurusan as $jrs)
                        <option value="{{$jrs->id_jurusan}}">{{$jrs->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection