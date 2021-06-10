@extends('layout')

@section('content')

<form action="{{ route('jenis_buku.update', $jenis_buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input required="required" type="text" name="jenis" value="{{ $jenis_buku->jenis }}">
    <button type="submit">Simpan</button>
</form>

@stop