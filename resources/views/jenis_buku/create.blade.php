@extends('layout')

@section('content')

<form action="{{ route('jenis_buku.store') }}" method="POST">
    @csrf
    <input required="required" type="text" name="jenis">
    <button type="submit">Simpan</button>
</form>

@stop
