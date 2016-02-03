@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <body onload="Index()">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                kamar</h1>
            <button onclick="Create()"><i class="glyphicon glyphicon-plus"></i>tambah
            </button>
        </div>
    </div>

    <div id="Index">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DATA KAMAR
                    </div>
                    <center>
                        <div id="loader2">
                            <img src=" {!! asset('images/download1.gif') !!}">
                        </div>
                    </center>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            @if (count($kamar) > 0)
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>nomor</th>
                                        <th>nama</th>
                                        <th>tipe</th>
                                        <th>fasilitas</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="data-example">
                                    {{--@foreach ($kamar as $data)--}}
                                    {{--<tr class="">--}}
                                    {{--<td>{{ $data->nomor}}</td>--}}
                                    {{--<td>{{ $data->nama}}</td>--}}
                                    {{--<td>{{ $data->tipe}}</td>--}}
                                    {{--<td>{{ $data->fasilitas}}</td>--}}

                                    {{--<td>--}}
                                    {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                    {{--onclick="location.href='/detail/{{ $data->id }}';">Detail--}}
                                    {{--</button>--}}
                                    {{--<button type="button" class="btn btn-outline btn-info"--}}
                                    {{--onclick="Edit({{ $data->id }})">Edit--}}
                                    {{--</button>--}}
                                    {{--<button type="button" class="btn btn-outline btn-danger"--}}
                                    {{--id="Delete" onclick="Hapus({{ $data->id }})">--}}
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
                        kamar
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form-Create">
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
    <!-- /.row -->
    <div id="Edit">
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
                        <form role="form" id="Form-Edit">
                            <div class="row">
                                <input type="hidden" name="id">
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

                                <div class="form-group">
                                    <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                    <button type="button" class="btn btn-outline btn-primary"
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

    {{--modal--}}

    {{--detail modal--}}
    <div id="myModal" class="modal" fade="dialog">
        <div class="modal-dialog">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><font face="impact">DETAIL KAMAR</font></h4>

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
                        nomor = $form.find("input[name='nomor']").val(),
                        nama = $form.find("input[name='nama']").val(),
                        tipe = $form.find("input[name='tipe']").val(),
                        fasilitas = $form.find("input[name='fasilitas']").val();

                var posting = $.post('/kamar', {
                    nomor: nomor,
                    nama: nama,
                    tipe: tipe,
                    fasilitas: fasilitas
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
                        nomor = $form.find("input[name='nomor']").val(),
                        nama = $form.find("input[name='nama']").val(),
                        tipe = $form.find("input[name='tipe']").val(),
                        fasilitas = $form.find("input[name='fasilitas']").val();
                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/kamar/' + id,
                    data: {
                        nomor: nomor,
                        nama: nama,
                        tipe: tipe,
                        fasilitas: fasilitas
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
                $.getJSON("/data-kamar", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#data-example").append("<tr><td>" + data.nomor + "</td><td>" + data.nama + "</td><td>" + data.tipe + "</td><td>" + data.fasilitas + "</td><td><button type='button' class='btn bttn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detial</button><button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button><button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");

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
                        url: '/kamar/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.nomor);
//                        var $form = $(this),
                        id = $("input[name='id']").val(data.id);
                        nomor = $("input[name='nomor']").val(data.nomor);
                        nama = $("input[name='nama']").val(data.nama);
                        tipe = $("input[name='tipe']").val(data.tipe);
                        fasilitas = $("input[name='fasilitas']").val(data.fasilitas);
                        $('#Edit').show();
                    });
        }

        // Set data on modal body
        function Detail(id) {
//            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/kamar/' + id,
                data: {},
                beforeSend: function () {
//                    $("#loader-wrapper").show();

                },
                success: function (data) {
                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td>nomor</td><td>:</td><td>" + data.nomor + "</td></tr>" +
                            "<tr><td>nama</td><td>:</td><td>" + data.nama + "</td></tr>" +
                            "<tr><td>tipe</td><td>:</td><td>" + data.tipe + "</td></tr>" +
                            "<tr><td>fasilitas</td><td>:</td><td>" + data.fasilitas + "</td></tr>"
                    );
                }

            });
        }
        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin ingin Menghapus ?");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/kamar/' + id,
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