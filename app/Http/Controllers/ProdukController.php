<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            ['nama' => 'Connector RJ45',        'harga' => 1500, 'stok' => 10],
            ['nama' => 'Tang Crimping',         'harga' => 75000, 'stok' => 0],
            ['nama' => 'Mikrotik',            'harga' => 500000, 'stok' => 25],
            ['nama' => 'Kabel LAN',            'harga' => 5000, 'stok' => 5],
            ['nama' => 'Switch',            'harga' => 200000, 'stok' => 0],
        ];

        return view('produk.index', ['produk' => $produk]);
    }

    
}