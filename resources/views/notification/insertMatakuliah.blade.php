@extends('master')
@section('title','Insert Berhasil')
@section('menu3','active')

@section('content')
<div class="container fluid text-center mt-3 p-4 bg-white">
    <h1 class="alert alert-success">Data berhasil ditambahkan</h1>
    <P>Tekan tombol Home untuk kembali.</p>
    <a href="/matakuliah" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a>
</div>
@endsection