<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">BNSP</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a href="{{url('/jurusan')}}" class="nav-link">Jurusan</a>
                    <a href="{{url('/kelas')}}" class="nav-link">Kelas</a>
                    <a href="{{url('/murid')}}" class="nav-link">Murid</a>
                    <a href="{{url('/')}}" class="nav-link">Tak Tau</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('container')
</body>
</html>