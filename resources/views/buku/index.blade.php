@extends('layout')

@section('content')

<a href="{{ route('buku.create') }}">Membuat Baru</a>

<table style="margin-left:auto;margin-right:auto" position="absolute" border="4" width="400px">
    <thead>
        <th bgcolor="blue" align="center">Nomor</th>
        <th bgcolor="blue" align="center">ID</th>
        <th bgcolor="blue" align="center">Judul</th>
        <th bgcolor="blue" align="center">Tahun Terbit</th>
        <th bgcolor="blue" align="center">Tampilan</th>
    </thead>
    <tbody>@foreach($buku as $buku)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td> 
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="{{ route('buku.show', $buku->id) }}">
                                Lihat
                            </a>

                            <a href="{{ route('buku.edit', $buku->id) }}">
                                Edit
                            </a>

                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini #{{ $buku->id }}?')">
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