@extends('layout')

@section('content')

<a href="{{ route('rak_buku.create') }}">Membuat Baru</a>

<table style="margin-left:auto;margin-right:auto" position="absolute" border="4" width="400px">
    <thead>
        <th bgcolor="blue" align="center">Nomor</th>
        <th bgcolor="blue" align="center">ID</th>
        <th bgcolor="blue" align="center">ID Buku</th>
        <th bgcolor="blue" align="center">ID Jenis Buku</th>
        <th bgcolor="blue" align="center">Tampilan</th>
    </thead>
    <tbody>@foreach($rak_buku as $rak_buku)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $rak_buku->id }}</td>
                <td>{{ $rak_buku->id_buku }}</td>
                <td>{{ $rak_buku->id_jenis_buku }}</td>
                <td> 
                    <form action="{{ route('rak_buku.destroy', $rak_buku->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="{{ route('rak_buku.show', $rak_buku->id) }}">
                                Lihat
                            </a>

                            <a href="{{ route('rak_buku.edit', $rak_buku->id) }}">
                                Edit
                            </a>

                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus data ini #{{ $rak_buku->id }}?')">
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