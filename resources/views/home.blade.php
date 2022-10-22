@extends('layouts.global')
@section('Toko Buku')
Ini Halaman Home
@endsection
@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Daftar Buku</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            @foreach ($tokobukus as $tokobuku)
                <div class="col" >
                    <div class="d-inline-flex align-items-center 
                    justify-content-center bg-gradient fs-2 mb-3">
                    <h1 class="fs-2" >{{ $tokobuku['nama'] }}</h1>
                    </div>
                    <h3 class="fs-2">{{ $tokobuku['jenis'] }}</h3>
                    <p>{{ $tokobuku['harga'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection