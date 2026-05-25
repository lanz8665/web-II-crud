@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <h1>Selamat Datang di halaman beranda {{ Auth::user()->name }}</h1>
    </div>
@endsection
