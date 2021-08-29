<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kategoriBerita;

class BeritaFrontController extends Controller
{
    public function index()
    {
        $data = berita::all();
        return view('front.berita', compact('data'));
    }

    public function show($id)
    {
        $pagename = 'Detail Berita';
        $data = berita::where('id', $id)->get();
        $idkategori = berita::where('id', $id)->pluck('id_kategori_berita')->first();
        $namakategori = kategoriBerita::where('id', $idkategori)->pluck('nama_kategori_berita')->first();
        return view('front.detail-berita', compact('pagename', 'data', 'namakategori'));
    }
}
