@extends('layout')

@section('content')

<a href="{{ route('jenis_buku.create') }}">Membuat Baru</a>

<table style="margin-left:auto;margin-right:auto" position="absolute" border="4" width="400px">
    <thead>
        <th bgcolor="blue" align="center">Nomor</th>
        <th bgcolor="blue" align="center">ID</th>
        <th bgcolor="blue" align="center">Jenis</th>
        <th bgcolor="blue" align="center">Tampilan</th>
    </thead>
    <tbody>@foreach($jenis_buku as $jenis_buku)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $jenis_buku->id }}</td>
                <td>{{ $jenis_buku->jenis }}</td>
                <td> 
                    <form action="{{ route('jenis_buku.destroy', $jenis_buku->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="{{ route('jenis_buku.show', $jenis_buku->id) }}">
                                Lihat
                            </a>

                            <a href="{{ route('jenis_buku.edit', $jenis_buku->id) }}">
                                Edit
                            </a>

                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini #{{ $jenis_buku->id }}?')">
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