@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">pengunjung</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah pengunjung
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/pengunjung" method="post">
                                <div class="form-group">
                                    <label>nama</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>alamat</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label>umur</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="umur">
                                </div>
                                <div class="form-group">
                                    <label>jenis_kelamin</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="jenis_kelamin">
                                </div>
                                <div class="form-group">
                                    <label>jenis_kamar</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="jenis_kamar">
                                </div>


                                    <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                    {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/pengunjung';">Kembali
                                    </button>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <!-- /.row -->
@endsection