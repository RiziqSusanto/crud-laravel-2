@extends('layout.main')

@section('title', 'Form Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Edit Data</h1>
            <form action="/murid/{{$murid->id_murid}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="id_kelas">ID Murid</label>
                    <input type="text" class="form-control" id="id_kelas" name="id_murid" placeholder="Masukkan ID Kelas" value="{{$murid->id_murid}}">
                </div>
                <div class="form-group">
                    <label for="id_kelas">ID Murid</label>
                    <input type="text" class="form-control" id="id_kelas" name="jenis_kelamin" placeholder="Masukkan ID Kelas" value="{{$murid->jenis_kelamin}}">
                </div>
                <div class="form-group">
                    <label for="id_kelas">NIM</label>
                    <input type="text" class="form-control" id="id_kelas" name="nim" placeholder="Masukkan ID Kelas" value="{{$murid->nim}}">
                </div>
                <div class="form-group">
                    <label for="id_kelas">Nama</label>
                    <input type="text" class="form-control" id="id_kelas" name="nama" placeholder="Masukkan ID Kelas" value="{{$murid->nama}}">
                </div>
                <div class="form-group">
                    <label for="kelas_id">ID Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-control">
                        <option value="{{$murid->kelas->id_kelas}}">{{$murid->kelas->nama_kelas}}</option>
                        @foreach($kelas as $kls)
                        <option value="{{$kls->id_kelas}}">{{$kls->nama_kelas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="jurusan_id">ID Jurusan</label>
                    <select name="jurusan_id" class="form-control">
                        <option value="{{$murid->jurusan->id_jurusan}}">{{$murid->jurusan->nama_jurusan}}</option>
                        @foreach($jurusan as $jrs)
                        <option value="{{$jrs->id_jurusan}}">{{$jrs->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>
@endsection