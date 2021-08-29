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
                    <li class="active">{{$pagename}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">

                    @if(session()->get('sukses'))
                        <div class="alert alert-success">
                        {{session()->get('sukses')}}
                        </div>

                    @endif
                    <div class="card-header">
                        <div class="col-9">
                            <strong class="card-title">{{$pagename}}</strong>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <a href="{{route('galeri.create')}}" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>#</th>
                                    <th width="10%">Nama Foto</th>
                                    <th width="25%">Foto</th>
                                    <th width="10%">Katergori</th>
                                    <th>Deskripsi</th>
                                    <th width="8%">Edit</th>
                                    <th width="8%">Hapus</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($data as $i=>$row)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$row->nama_foto}}</td>
                                    <td><img width="250px" src="{{asset('front/assets/img/galeri/'.$row->image)}}"></td>
                                    @switch($row->id_kategori)
                                        @case (1) <td>Pelajaran</td>
                                            @break
                                        @case (2) <td>Rutinitas</td>
                                            @break
                                        @case (3) <td>Ekstrakulikuler</td>
                                            @break
                                        @case (4) <td>Lain-lain</td>
                                            @break
                                    @endswitch
                                    <td>{{$row->deskripsi}}</td>
                                    <td><a href="{{route('galeri.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="{{route('galeri.destroy', $row->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div>

@endsection
