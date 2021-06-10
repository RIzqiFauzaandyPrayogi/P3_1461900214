@extends('layout')

@section('content')

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input required="required" type="text" name="username" value="{{ $user->username }}">
    <button type="submit">Simpan</button>
</form>

@stop