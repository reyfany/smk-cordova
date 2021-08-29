@extends('admin.layout.master')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Berita</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{url('administrator')}}">Beranda</a></li>
                    <li><a href="{{url('administrator/Berita')}}">Berita</a></li>
                    <li class="active">{{$pagename}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>{{$pagename}}</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('berita.update',$data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @method('PATCH')
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Tugas</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtjudul_berita" value="{{$data->judul_berita}}"placeholder="Text" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pilih Foto</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="text-input" name="txtfoto_berita" placeholder="Text" value="{{$data->foto_berita}}" class="form-control">
                                    <small>Pilih foto untuk merubah Foto</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori Tugas</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="optionid_kategori_berita" id="select" class="form-control">

                                        @foreach($data_kategori as $kategori)

                                        <option value={{$kategori->id}}
                                            @if($kategori->id==$data->id_kategori_berita)
                                                selected
                                            @endif
                                        >
                                        {{$kategori->nama_kategori_berita}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Isi Berita</label></div>
                                <div class="col-12 col-md-9"><textarea name="txtisi_berita" id="textarea-input" rows="5" value="{{$data->isi_berita}}" placeholder="Deskripsi Foto" class="form-control" required>{{$data->isi_berita}}</textarea></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection
