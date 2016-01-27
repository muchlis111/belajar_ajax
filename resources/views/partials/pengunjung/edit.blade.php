@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Buku</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel heading">
                    Tambah pengunjung
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/update-pengunjung/{{ $data->id  }}" method="post">
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label>name</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="name" value="{{$data->name}}">
                                </div>
                                <div class="form-group">
                                    <label>alamat</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
                                </div>
                                <div class="form-group">
                                    <label>umur</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="umur" value="{{$data->umur}}">
                                </div>
                                <div class="form-group">
                                    <label>jenis_kelamin</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="jenis_kelamin"
                                           value="{{$data->jenis_kelamin}}">
                                </div>
                                <div class="form-group">
                                    <label>jenis_kamar</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="jenis_kamar"
                                           value="{{$data->jenis_kamar}}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-outline btn-info" type="submit" value="simpan">
                                    <button type="button" class="btn btn-outline" btn="primary"
                                            onclick="location.href='/pengunjung';">kembali
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection