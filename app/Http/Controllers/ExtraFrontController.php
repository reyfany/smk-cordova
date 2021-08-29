<?php

namespace App\Http\Controllers;

use App\Models\extra;
use App\Models\kategori;

class ExtraFrontController extends Controller
{
    public function index()
    {
    $data = extra::all();
    return view('front.extra', compact('data'));
}

public function show($id)
{
    $pagename = 'Detail Foto';
    $data = extra::where('id', $id)->get();
    $idkategori = extra::where('id', $id)->pluck('id_kategori')->first();
    $namakategori = kategori::where('id', $idkategori)->pluck('nama_kategori')->first();
    return view('front.foto', compact('pagename', 'data', 'namakategori'));
}
}