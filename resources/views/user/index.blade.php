@extends('layout')

@section('content')

<a href="{{ route('user.create') }}">Membuat Baru</a>

<table style="margin-left:auto;margin-right:auto" position="absolute" border="4" width="400px">
    <thead>
        <th bgcolor="blue" align="center">Nomor</th>
        <th bgcolor="blue" align="center">ID</th>
        <th bgcolor="blue" align="center">Nama</th>
        <th bgcolor="blue" align="center">Username</th>
        <th bgcolor="blue" align="center">Password</th>
        <th bgcolor="blue" align="center">Tampilan</th>
    </thead>
    <tbody>@foreach($user as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password }}</td>
                <td> 
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="{{ route('user.show', $user->id) }}">
                                Lihat
                            </a>

                            <a href="{{ route('user.edit', $user->id) }}">
                                Edit
                            </a>

                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini #{{ $user->id }}?')">
                                Hapus
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
    </tbody>
    @endforeach
</table>
@stop