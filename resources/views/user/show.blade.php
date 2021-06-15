@extends('layout')

@section('content')


<span style="margin-right:40px">{{ $user->nama }}</span>
<span style="margin-right:40px">{{ $user->username }}</span>
<span style="margin-right:40px">{{ $user->password }}</span>


@stop