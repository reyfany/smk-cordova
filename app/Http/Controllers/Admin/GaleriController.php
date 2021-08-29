<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\galeri;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $pagename = 'Galeri';
        $data = galeri::all();
        return view('admin.galeri.index', compact('pagename', 'data'));
    }

    public function create()
    {
        $pagename = 'Tambah Foto';
        $data_kategori = kategori::all();
        return view('admin.galeri.create', compact('pagename', 'data_kategori', ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'txtnama_foto' => 'required',
            'optionid_kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'txtdeskripsi_foto' => 'required',
        ]);

        $file = $request->file('image');
        // nama file
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $data_galeri = new galeri([
            'nama_foto' => $request->get('txtnama_foto'),
            'image' => $nama_file,
            'id_kategori' => $request->get('optionid_kategori'),
            'deskripsi' => $request->get('txtdeskripsi_foto'),
        ]);

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'front/assets/img/galeri';

        // upload file
        $file->move($tujuan_upload, $nama_file);

        $data_galeri->save();

        return redirect('administrator/galeri')->with('sukses', 'Foto berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pagename = 'Edit Foto';
        $data = galeri::find($id);
        $data_kategori = kategori::all();
        return view('admin.galeri.edit', compact('pagename', 'data', 'data_kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'txtnama_foto' => 'required',
            'optionid_kategori' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'txtdeskripsi_foto' => 'required',
        ]);

        $data = galeri::find($id);

        $file = $request->file('image');

        // nama file
        if ($file == "") {
            $nama_file = $data->image;
        } else {
            $gambar = galeri::where('id', $id)->first();
            File::delete('front/assets/img/galeri/' . $gambar->image);
            $nama_file = time() . "_" . $file->getClientOriginalName();
        }

        $data->nama_foto = $request->get('txtnama_foto');
        $data->image = $nama_file;
        $data->id_kategori = $request->get('optionid_kategori');
        $data->deskripsi = $request->get('txtdeskripsi_foto');

        // upload file
        $tujuan_upload = 'front/assets/img/galeri';
        if ($file == "") {

        } else {
            $file->move($tujuan_upload, $nama_file);
        }

        $data->save();
        return redirect('administrator/galeri')->with('sukses', 'Foto berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = galeri::find($id);
        $gambar = galeri::where('id', $id)->first();
        File::delete('front/assets/img/galeri/' . $gambar->image);
        $data->delete();
        return redirect('administrator/galeri')->with('sukses', 'Foto berhasil dihapus');
    }

    // public function hapus($id)
    // {
    //     // hapus file
    //     $gambar = galeri::where('id', $id)->first();
    //     File::delete('front/assets/img/' . $gambar->file);

    //     // hapus data
    //     galeri::where('id', $id)->delete();
    // }
}
