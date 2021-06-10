@extends('layout')

@section('content')

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <input required="required" type="text" name="judul">
    <button type="submit">Simpan</button>
</form>

@stop
