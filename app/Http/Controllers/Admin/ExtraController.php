<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\extra;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExtraController extends Controller
{
    public function index()
    {
        $pagename = 'Ekstrakurikuler';
        $data = extra::all();
        return view('admin.extra.index', compact('pagename', 'data'));
    }

    public function create()
    {
        $pagename = 'Tambah Data';
        $data_kategori = kategori::all();
        return view('admin.extra.create', compact('pagename', 'data_kategori', ));
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

        $data_extra = new extra([
            'nama_foto' => $request->get('txtnama_foto'),
            'image' => $nama_file,
            'id_kategori' => $request->get('optionid_kategori'),
            'deskripsi' => $request->get('txtdeskripsi_foto'),
        ]);

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'front/assets/img/extra';

        // upload file
        $file->move($tujuan_upload, $nama_file);

        $data_extra->save();

        return redirect('administrator/extra')->with('sukses', 'Foto berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pagename = 'Edit Data';
        $data = extra::find($id);
        $data_kategori = kategori::all();
        return view('admin.extra.edit', compact('pagename', 'data', 'data_kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'txtnama_foto' => 'required',
            'optionid_kategori' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'txtdeskripsi_foto' => 'required',
        ]);

        $data = extra::find($id);

        $file = $request->file('image');

        // nama file
        if ($file == "") {
            $nama_file = $data->image;
        } else {
            $gambar = extra::where('id', $id)->first();
            File::delete('front/assets/img/extra/' . $gambar->image);
            $nama_file = time() . "_" . $file->getClientOriginalName();
        }

        $data->nama_foto = $request->get('txtnama_foto');
        $data->image = $nama_file;
        $data->id_kategori = $request->get('optionid_kategori');
        $data->deskripsi = $request->get('txtdeskripsi_foto');

        // upload file
        $tujuan_upload = 'front/assets/img/extra';
        if ($file == "") {

        } else {
            $file->move($tujuan_upload, $nama_file);
        }

        $data->save();
        return redirect('administrator/extra')->with('sukses', 'Foto berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = extra::find($id);
        $gambar = extra::where('id', $id)->first();
        File::delete('front/assets/img/extra/' . $gambar->image);
        $data->delete();
        return redirect('administrator/extra')->with('sukses', 'Foto berhasil dihapus');
    }
}
