<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\kategori;

class GaleriFrontController extends Controller
{
    public function index()
    {
        $data = galeri::all();
        return view('front.galeri', compact('data'));
    }

    public function show($id)
    {
        $pagename = 'Detail Foto';
        $data = galeri::where('id', $id)->get();
        $idkategori = galeri::where('id', $id)->pluck('id_kategori')->first();
        $namakategori = kategori::where('id', $idkategori)->pluck('nama_kategori')->first();
        return view('front.foto', compact('pagename', 'data', 'namakategori'));
    }
}
