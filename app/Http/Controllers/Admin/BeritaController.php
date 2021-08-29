<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\kategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagename = 'Berita';
        $data = berita::all();
        return view('admin.berita.index', compact('pagename', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagename = 'Tambah Berita';
        $data_kategori = kategoriBerita::all();
        return view('admin.berita.create', compact('pagename', 'data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtjudul_berita' => 'required',
            'txtfoto_berita' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'optionid_kategori_berita' => 'required',
            'txtisi_berita' => 'required',
        ]);

        $file = $request->file('txtfoto_berita');
        // nama file
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $data_berita = new berita([
            'judul_berita' => $request->get('txtjudul_berita'),
            'foto_berita' => $nama_file,
            'id_kategori_berita' => $request->get('optionid_kategori_berita'),
            'isi_berita' => $request->get('txtisi_berita'),
        ]);

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'front/assets/img/berita';

        // upload file
        $file->move($tujuan_upload, $nama_file);

        $data_berita->save();

        return redirect('administrator/berita')->with('sukses', 'Berita berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagename = 'Edit Berita';
        $data = berita::find($id);
        $data_kategori = kategoriBerita::all();
        return view('admin.berita.edit', compact('pagename', 'data', 'data_kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtjudul_berita' => 'required',
            'txtfoto_berita' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'optionid_kategori_berita' => 'required',
            'txtisi_berita' => 'required',
        ]);

        $data = berita::find($id);

        $file = $request->file('txtfoto_berita');

        // nama file
        if ($file == "") {
            $nama_file = $data->foto_berita;
        } else {
            $gambar = berita::where('id', $id)->first();
            File::delete('front/assets/img/berita/' . $gambar->foto_beirta);
            $nama_file = time() . "_" . $file->getClientOriginalName();
        }

        $data->judul_berita = $request->get('txtjudul_berita');
        $data->foto_berita = $nama_file;
        $data->id_kategori_berita = $request->get('optionid_kategori_berita');
        $data->isi_berita = $request->get('txtisi_berita');

        // upload file
        $tujuan_upload = 'front/assets/img/berita';
        if ($file == "") {

        } else {
            $file->move($tujuan_upload, $nama_file);
        }

        $data->save();
        return redirect('administrator/berita')->with('sukses', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = berita::find($id);
        $gambar = berita::where('id', $id)->first();
        File::delete('front/assets/img/berita/' . $gambar->foto_berita);
        $data->delete();
        return redirect('administrator/berita')->with('sukses', 'Foto berhasil dihapus');
    }
}
