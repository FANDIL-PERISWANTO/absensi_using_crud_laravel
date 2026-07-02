<!-- <!DOCTYPE html>
<html>
<head>
    <title>Sistem Absensi</title>
</head>
<body>

    <h1>Selamat Datang</h1>

    <h3>Project Laravel Absensi</h3>

    <p>Lesson 6 - Blade View</p>

</body>
</html> -->

<!-- Gunakan layouts/app.blade.php sebagai template untama -->
@extends('layouts.app')

@include('home.hero')
<!-- @include('home.statistics')
@include('home.announcement') -->

<!-- Isi bagian @yield('content') yang ada di layout. -->
@section('content')

<div class="row">
<div class="col-md-6">
    @include('home.statistics')
</div>
<div class="col-md-6">
    @include('home.announcement')
</div>

</div>

<h1>HOME</h1>

<p>Selamat datang di Employee Attendance System.</p>

@endsection