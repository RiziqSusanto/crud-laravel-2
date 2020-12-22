@extends('layout.main')

@section('title', 'Kelas')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-4">Detail Kelas</h1>
            <div class="card text-left">
              <div class="card-body">
                <h4 class="card-title">{{$kelas->nama_kelas}}</h4>
                <h5 class="card-title">ID Kelas : {{$kelas->id_kelas}}</h5>
                <p class="card-text">Jurusan : {{$kelas->jurusan->nama_jurusan}}</p>
              </div>
            </div>
            <a href="/kelas">Kembali</a>
        </div>
    </div>
</div>
@endsection