@extends('layout')

@section('content')

<form action="{{ route('rak_buku.store') }}" method="POST">
    @csrf
    <input required="required" type="text" name="id_buku">
    <button type="submit">Simpan</button>
</form>

@stop
