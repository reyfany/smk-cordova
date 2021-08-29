@extends('admin.layout.master')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Galeri</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{url('administrator')}}">Dashboard</a></li>
                    <li><a href="{{url('administrator/galeri')}}">Galeri</a></li>
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
                        <form action="{{route('galeri.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Foto</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_foto" placeholder="Text" class="form-control" required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pilih Foto</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="text-input" name="image" placeholder="Text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori Foto</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="optionid_kategori" id="select" class="form-control">

                                        @foreach($data_kategori as $kategori)

                                        <option value={{$kategori->id}}>{{$kategori->nama_kategori}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                                <div class="col-12 col-md-9"><textarea name="txtdeskripsi_foto" id="textarea-input" rows="5" placeholder="Keterangan..." class="form-control" required></textarea></div>
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
