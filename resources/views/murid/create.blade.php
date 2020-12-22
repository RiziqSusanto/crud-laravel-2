@extends('layout.main')

@section('title', 'Form Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Tambah Data</h1>
            <form action="/murid" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">ID Murid</label>
                    <input type="text" class="form-control" id="id" name="id_murid" placeholder="Masukkan ID Murid">
                </div>
                <div class="form-group">
                    <label for="nama">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Murid">
                </div>
                <div class="form-group">
                    <label for="kelas_id">ID Jurusan</label>
                    <select name="kelas_id" id="kelas_id" class="form-control">
                        <option >--- Kelas ---</option>
                        @foreach($kelas as $kls)
                        <option value="{{$kls->id_kelas}}">{{$kls->nama_kelas}}</option>
                        @endforeach
                    </select>
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