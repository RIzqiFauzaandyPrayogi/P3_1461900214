@extends('layout')

@section('content')


<span style="margin-right:40px">{{ $buku->id }}</span>
<span style="margin-right:40px">{{ $buku->judul }}</span>
<span style="margin-right:40px">{{ $buku->tahun_terbit }}</span>


@stop