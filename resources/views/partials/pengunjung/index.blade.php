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
                DATA PENGUNJUNG
            </div>

            <div class="row">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @if (count($pengunjung) > 0)
                    <table class="table table-striped table-bordered table-hover" id="dataTables-examples">
                        <thead>
                        <tr>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>umur</th>
                        <th>jenis_kelamin</th>
                        <th>jenis_kamar</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($pengunjung as $data)
                            <tr class="">
                                <td>{{ $data->name}}</td>
                                <td>{{ $data->alamat}}</td>
                                <td>{{ $data->umur}}</td>
                                <td>{{ $data->jenis_kelamin}}</td>
                                <td>{{ $data->jenis_kamar}}</td>
                                <td>
                                    <button type="button" class="btn btn-outline btn-primary"
                                            onclick="location.href='/pengunjung/{{ $data->id}}';">Detail
                                    </button>
                                    <button type="button" class="btn btn-outline btn-info"
                                            onclick="location.href='/edit-pengunjung/{{ $data->id}}';">update
                                    </button>
                                    <button type="button" class="btn btn-outline btn-danger"
                                            onclick="location.href='/hapus-pengunjung/{{ $data->id}}';">Delete
                                    </button>
                                    <button type="button" class="btn btn-outline btn-warning"
                                            onclick="location.href='/hapus-pengunjung/{{ $data->id}}';">add
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
@endsection