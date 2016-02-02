@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <body onload="Index()">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">pengunjung</h1>
            <button onclick="Create()"><i class="glyphicon glyphicon-plus"></i>tambah
            </button>
        </div>
      </div>

    <div id="index">
      <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DATA PENGUNJUNG
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @if (count($pengunjung) > 0)
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                    {{--@foreach ($pengunjung as $data)--}}
                                        {{--<tr class="">--}}
                                            {{--<td>{{ $data->name}}</td>--}}
                                            {{--<td>{{ $data->alamat}}</td>--}}
                                            {{--<td>{{ $data->umur}}</td>--}}
                                            {{--<td>{{ $data->jenis_kelamin}}</td>--}}
                                            {{--<td>{{ $data->jenis_kamar}}</td>--}}
                                            {{--<td>--}}
                                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                                        {{--onclick="location.href='/pengunjung/{{ $data->id}}';">Detail--}}
                                                {{--</button>--}}
                                                {{--<button type="button" class="btn btn-outline btn-info"--}}
                                                        {{--onclick="location.href='/edit-pengunjung/{{ $data->id}}';">--}}
                                                    {{--update--}}
                                                {{--</button>--}}
                                                {{--<button type="button" class="btn btn-outline btn-danger"--}}
                                                        {{--onclick="location.href='/hapus-pengunjung/{{ $data->id}}';">--}}
                                                    {{--Delete--}}
                                                {{--</button>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                    {{--@endforeach--}}
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div id="Create">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah pengunjung
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form-Create">
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

        <div id="edit">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Buku</h1>
              </div>
          </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel heading">
                            pengunjung
                        </div>
                        <div class="panel-body">
                            <form role="form" id="Form-edit">
                                <div class="row">
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

        <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $('#Create').hide();
            $('#Edit').hide();
            getAjax();
            $("#Form-Create").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        name = $form.find("input[name='name']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        umur = $form.find("input[name='umur']").val(),
                        jenis_kelamin = $form.find("input[name='jenis_kelamin']").val();
                        jenis_kamar = $form.find("input[name='jenis_kamar']").val();
                var posting = $.post('/pengunjung', {
                    name          : name,
                    alamat        : alamat,
                    umur          : umur,
                    jenis_kelamin : jenis_kelamin,
                    jenis_kamar   :jenis_kamar

                });
                // Put the results in a div
                posting.done(function (data) {
//                    console.log(data);
                    window.alert(data.result.message);
                    getAjax();
                    Index();
                });
            });
        });
        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();
        }
        function Create() {
            $('#Index').hide();
            $('#Edit').hide();
            $('#Create').show();

        }
        function getAjax() {
            $("#tampildata").children().remove();
            $.getJSON("/data-pengunjung", function (data) {
                $.each(data.slice(0,9), function (i, data) {
                    $("#tampildata").append("<tr><td>" + data.name + "</td><td>" + data.alamat + "</td><td>" + data.umur + "</td><td>" + data.jenis_kelamin + "</td><td>" + data.jenis_kamar + "</td><td><button type='button' class='btn btn-outline btn-info' onclick='Edit("+ data.id +")'>Edit</button><button type='button' class='btn btn-outline btn-danger' onclick='Hapus("+ data.id +")'>Delete</button></td></tr>");
                })
            });
        }
        function Edit(id) {
            $('#Index').hide();
            $('#Create').hide();
            $('#Edit').hide();
            $.ajax({
                        method: "Get",
                        url: '/pengunjung/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.nomor);
//                        var $form = $(this),
                        name          = $("input[name='name']").val(data.name);
                        alamat        = $("input[name='alamat']").val(data.alamat);
                        umur          = $("input[name='umur']").val(data.umur);
                        jenis_kelamin = $("input[name='jenis_kelamin']").val(data.jenis_kelamin);
                        jenis_kamar   = $("input[name='jenis_kamar']").val(data.jenis_kamar);


                        $('#Edit').show();
                    });
            $("#Form-Edit").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        name         = $form.find("input[name='name']").val(),
                        alamat       = $form.find("input[name='alamat']").val(),
                        umur         = $form.find("input[name='umur']").val(),
                        jenis_kelamin= $form.find("input[name='jenis_kelamin']").val();
                        jenis_kamar  = $form.find("input[name='jenis_kamar']").val();
                $.ajax({
                            method: "PUT",
                            url: '/pengunjung/' + id,
                            data: {

                                name          : name,
                                alamat        : alamat,
                                umur          : umur,
                                jenis_kelamin : jenis_kelamin,
                                jenis_kamar   :jenis_kamar
                            }
                        })
                        .done(function (data) {
                            window.alert(data.result.message);
                            getAjax();
                            Index();
                        });
            });
        }
        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin ingin Menghapus ?");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/pengunjung/' + id,
                            data: {}
                        })
                        .done(function (data) {
                            window.alert(data.result.message);
                            getAjax();
                            Index();
                        });
            }
        }
    </script>


    </body>

@endsection
