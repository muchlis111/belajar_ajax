@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lama_kamar</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lama_kamar
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="/lama_kamar" method="post">
                                <div class="form-group">
                                    <label>pengunjung</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="pengunjung">
                                </div>
                                <div class="form-group">
                                    <label>kamar</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="kamar">
                                </div>
                                <div class="form-group">
                                    <label>lama_hari</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="lama_hari">
                                </div>

0
                                    <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                    {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/lama_hari';">Kembali
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