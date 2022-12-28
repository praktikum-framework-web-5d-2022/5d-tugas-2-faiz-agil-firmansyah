@extends('master')
@section('title','Delete Berhasil')
@section('menu1','active')

@section('content')
<div class="container fluid text-center mt-3 p-4 bg-white">
    <h1 class="alert alert-success">Data berhasil dihapus</h1>
    <P>Tekan tombol Home untuk kembali.</p>
    <a href="/dosen" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a>
</div>
@endsection