@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">lama_hari</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel heading">
                    lama_hari
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/update-lama_kamar/{{ $lama_hari->id  }}" method="post">
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label>pengunjung</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="pengunjung" value="{{$lama_hari->pengunjung}}">
                                </div>
                                <div class="form-group">
                                    <label>kamar</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="kamar" value="{{$lama_hari->kamar}}">
                                </div>
                                <div class="form-group">
                                    <label>lama_hari</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="lama_hari" value="{{$lama_hari->lama_hari}}">
                                </div>


                                <div class="form-group">
                                    <input class="btn btn-outline btn-info" type="submit" value="simpan">
                                    <button type="button" class="btn btn-outline" btn="primary"
                                            onclick="location.href='/lama_hari';">kembali
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