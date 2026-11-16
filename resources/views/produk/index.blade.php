@extends('layouts.app')

@section('isi')
    <h1>Daftar Produk</h1>

    <table class="table table-striped">
        <tr>
            <th>Nama</th><th>Harga</th><th>Status</th>
        </tr>
        @foreach ($produk as $p)
        <tr>
            <td>{{ $p['nama'] }}</td>
            <td>Rp {{ number_format($p['harga'], 0, ',', '.') }}</td>
            <td>
                @if ($p['stok'] > 0)
                    <span class="badge bg-success">Tersedia</span>
                @else
                    <span class="badge bg-danger">Habis</span>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection