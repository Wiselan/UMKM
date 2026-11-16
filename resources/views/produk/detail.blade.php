@extends('layouts.app')
@section('judul', $p['nama'])

@section('isi')
    <h1>{{ $p['nama'] }}</h1>
    <p class="fs-4">Rp {{ number_format($p['harga'], 0, ',', '.') }}</p>
    <p>Stok: {{ $p['stok'] }}</p>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
@endsection