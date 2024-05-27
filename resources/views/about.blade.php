@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <p>{{ $alamat }}</p>
    <img src="{{ $image }}" alt="{{$nama}}" width="200">

    <!-- file javascript bisa diakses -->
    <!-- <script src="js/script.js"></script> -->

@endsection
