@extends('layout')

@section('content')

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <input required="required" type="text" name="username">
    <button type="submit">Simpan</button>
</form>

@stop
