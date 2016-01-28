@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kamar</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    kamar
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/kamar" method="post">
                                <div class="form-group">
                                    <label>nomor</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="nomor">
                                </div>
                                <div class="form-group">
                                    <label>nama</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>tipe</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="tipe">
                                </div>
                                <div class="form-group">
                                    <label>fasilitas</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="fasilitas">
                                </div>



                                    <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                    {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/kamar';">Kembali
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