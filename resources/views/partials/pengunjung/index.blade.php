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

    <div id="Index">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DATA PENGUNJUNG
                    </div>
                    <center>
                        <div id="loader2">
                            <img src=" {!! asset('images/download1.gif') !!}">
                        </div>
                    </center>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            @if (count($pengunjung) > 0)
                                <table class="table table-striped table-bordered table-hover">
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
                                    <tbody id="data-example">
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
                                            onclick="Index()">Kembali
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
    </div>

    <div id="Edit">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">pengunjung</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel heading">
                        pengunjung
                    </div>
                    <div class="panel-body">
                        <form role="form" id="Form-Edit">
                            <div class="row">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label>name</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="name" >
                                </div>
                                <div class="form-group">
                                    <label>alamat</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="alamat" >
                                </div>
                                <div class="form-group">
                                    <label>umur</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="umur" >
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

                                    <div class="form-group">
                                        <input class="btn btn-outline btn-info" type="submit" value="simpan">
                                        <button type="button" class="btn btn-outline" btn="primary"
                                                onclick="Index()">kembali
                                        </button>
                                    </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{--detail modal--}}
    <div id="myModal" class="modal" fade="dialog">
        <div class="modal-dialog">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><font face="impact">DETAIL PENGUNJUNG</font></h4>

                </div>
                <div class="modal-body">
                    <p>some text in the modal.</p>
                    <div id="loader-wrapper">
                        <div id="loader"></div>
                    </div>
                    <table class="table table-striped">
                        <tbody id="modal-body">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">kembali</button>
                </div>
            </div>
        </div>
    </div>


    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            var currentRequest = null;
            $('#Create').hide();
            $('#Edit').hide();

            $("#Form-Create").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        name = $form.find("input[name='name']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        umur = $form.find("input[name='umur']").val(),
                        jenis_kelamin = $form.find("input[name='jenis_kelamin']").val(),
                        jenis_kamar = $form.find("input[name='jenis_kamar']").val();

                var posting = $.post('/pengunjung', {
                    name: name,
                    alamat: alamat,
                    umur: umur,
                    jenis_kelamin: jenis_kelamin,
                    jenis_kamar: jenis_kamar

                });
                // Put the results in a div
                posting.done(function (data) {
//                    console.log(data);
                    window.alert(data.result.message);
                    getAjax();
                    Index();
                });
            });

            $("#Form-Edit").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        id = $form.find("input[name='id']").val(),
                        name = $form.find("input[name='name']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        umur = $form.find("input[name='umur']").val(),
                        jenis_kelamin = $form.find("input[name='jenis_kelamin']").val(),
                        jenis_kamar = $form.find("input[name='jenis_kamar']").val();
                currentRequest = $.ajax({
                            method: "PUT",
                            url: '/pengunjung/' + id,
                            data: {

                                name: name,
                                alamat: alamat,
                                umur: umur,
                                jenis_kelamin: jenis_kelamin,
                                jenis_kamar: jenis_kamar

                        },
                    beforeSend: function () {
                    if (currentRequest != null) {
                        currentRequest.abort();
                    }
                },
                success: function (data) {
                    window.alert(data.result.message);
                    getAjax();
                    Index();
                },
                error: function (data) {
                    window.aleart(data.result.message);
                    Index();
                }
            })
        });
        });
        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();
            $("#data-example").children().remove();
            document.getElementById("Form-Create").reset();
//            getAjax();
        }
        document.getElementById("Form-Edit").reset();
        getAjax();
        function Create() {
            $('#Index').hide();
            $('#Edit').hide();
            $('#Create').show();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
        }
        function getAjax() {
            $("#data-example").children().remove();
            $("#loader2").delay(2000).animate({
                opacity: 0,
                width: 0,
                height: 0
            }, 500);
            setTimeout(function () {
                $.getJSON("/data-pengunjung", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#data-example").append("<tr><td>" + data.name + "</td><td>" + data.alamat + "</td><td>" + data.umur + "</td><td>" + data.jenis_kelamin + "</td><td>" + data.jenis_kamar + "</td><td><button type='button' class='btn bttn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button><button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button><button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");

                    })
                });
            }, 2200);
        }
        function Edit(id) {
            $('#Index').hide();
            $('#Create').hide();
            $('#Edit').hide();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            $.ajax({
                        method: "Get",
                        url: '/pengunjung/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.name);
//                        var $form = $(this),
                        id = $("input[name='id']").val(data.id);
                        name = $("input[name='name']").val(data.name);
                        alamat = $("input[name='alamat']").val(data.alamat);
                        umur = $("input[name='umur']").val(data.umur);
                        jenis_kelamin = $("input[name='jenis_kelamin']").val(data.jenis_kelamin);
                        jenis_kamar = $("input[name='jenis_kamar']").val(data.jenis_kamar);
                        $('#Edit').show();
                    });
        }
        // Set data on modal body
        function Detail(id) {
//            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/pengunjung/' + id,
                data: {},
                beforeSend: function () {
//                    $("#loader-wrapper").show();

                },
                success: function (data) {
                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td>name</td><td>:</td><td>" + data.name + "</td></tr>" +
                            "<tr><td>alamat</td><td>:</td><td>" + data.alamat + "</td></tr>" +
                            "<tr><td>umur</td><td>:</td><td>" + data.umur + "</td></tr>" +
                            "<tr><td>jenis_kelamin</td><td>:</td><td>" + data.jenis_kelamin + "</td></tr>" +
                    "<tr><td>jenis_kamar</td><td>:</td><td>" + data.jenis_kamar + "</td></tr>"
                    );
                }

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
