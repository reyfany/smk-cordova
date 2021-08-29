@extends('admin.layout.master')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{$pagename}}</h1>
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
                            <a href="{{route('berita.create')}}" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr style="text-align: center;">
                                    <th width="2%">#</th>
                                    <th width="12%">NIP</th>
                                    <th width="25%">Nama Guru</th>
                                    <th width="10%">Bidang</th>
                                    <th>No Hp</th>
                                    <th width="8%">Edit</th>
                                    <th width="8%">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div>

@endsection
