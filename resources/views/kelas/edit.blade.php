@extends('layout.main')

@section('title', 'Form Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4">Edit Data</h1>
            <form action="/kelas/{{$kelas->id_kelas}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="id_kelas">ID Kelas</label>
                    <input type="text" class="form-control" id="id_kelas" name="id_kelas" placeholder="Masukkan ID Kelas" value="{{$kelas->id_kelas}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama" name="nama_kelas" placeholder="Masukkan Nama Kelas" value="{{$kelas->nama_kelas}}">
                </div>
                <div class="form-group">
                    <label for="jurusan_id">ID Jurusan</label>
                    <select name="id_jurusan" class="form-control">
                        <option >{{$kelas->jurusan->nama_jurusan}}</option>
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