@extends('layout')

@section('content')

<form action="{{ route('rak_buku.update', $rak_buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input required="required" type="text" name="id_buku" value="{{ $rak_buku->id_buku }}">
    <button type="submit">Simpan</button>
</form>

@stop