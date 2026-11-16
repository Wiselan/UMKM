<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog UMKM</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="{{ route('beranda') }}">Katalog UMKM</a>
    <div class="navbar-nav">
        <a class="nav-link {{ request()->routeIs('produk.*') ? 'active' : '' }}"
           href="{{ route('produk.index') }}">Produk</a>
        <a class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}"
           href="{{ route('kategori.index') }}">Kategori</a>
        <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}"
           href="{{ route('tentang') }}">Tentang</a>
    </div>
</nav>

    <div class="container mt-4">
        @yield('isi')
    </div>
</body>
</html>