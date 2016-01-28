@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">kamar</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel heading">
                    kamar
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/update-kamar/{{ $kamar->id  }}" method="post">
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label>nomor</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="nomor" value="{{$kamar->nomor}}">
                                </div>
                                <div class="form-group">
                                    <label>nama</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="nama" value="{{$kamar->nama}}">
                                </div>
                                <div class="form-group">
                                    <label>tipe</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="tipe" value="{{$kamar->tipe}}">
                                </div>
                                <div class="form-group">
                                    <label>fasilitas</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="fasilitas" value="{{$kamar->fasilitas}}">
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-outline btn-info" type="submit" value="simpan">
                                    <button type="button" class="btn btn-outline" btn="primary"
                                            onclick="location.href='/kamar';">kembali
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