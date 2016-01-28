@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><marque>kamar</marque></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DATA KAMAR
                </div>

                <div class="row">
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            @if (count($kamar) > 0)
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>namor</th>
                                        <th>nama</th>
                                        <th>tipe</th>
                                        <th>fasilitas</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($kamar as $data)
                                        <tr class="">
                                            <td>{{ $data->nomor}}</td>
                                            <td>{{ $data->nama}}</td>
                                            <td>{{ $data->tipe}}</td>
                                            <td>{{ $data->fasilitas}}</td>

                                            <td>
                                                <button type="button" class="btn btn-outline btn-primary"
                                                        onclick="location.href='/kamar/{{ $data->id}}';">Detail
                                                </button>
                                                <button type="button" class="btn btn-outline btn-info"
                                                        onclick="location.href='/edit-kamar/{{ $data->id}}';">
                                                    update
                                                </button>
                                                <button type="button" class="btn btn-outline btn-danger"
                                                        onclick="location.href='/hapus-kamar/{{ $data->id}}';">
                                                    Delete
                                                </button>
                                                <button type="button" class="btn btn-outline btn-warning"
                                                        onclick="location.href='/create-kamar';">add
                                                </button>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection