@extends('layout')

@section('content')

<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input required="required" type="text" name="judul" value="{{ $buku->judul }}">
    <button type="submit">Simpan</button>
</form>

@stop