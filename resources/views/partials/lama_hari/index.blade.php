@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <body onload="Index()">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" ><b>DATA PENGINAPAN</b></h1>
            <button onclick="Create()"><i class="glyphicon glyphicon-plus"></i>tambah
            </button>
        </div>
    </div>

    <div id="Index">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DATA lama_hari
                    </div>
                    <center>
                        <div id="loader2">
                            <img src=" {!! asset('images/download1.gif') !!}">
                        </div>
                    </center>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            @if (count($lama_hari) > 0)
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>pengunjung</th>
                                        <th>kamar</th>
                                        <th>lama_hari</th>

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
                        Tambah lama_hari
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form-Create">
                                    <div class="form-group">
                                        <label>pengunjung</label>
                                        <label>:</label>
                                        <select id="pengunjung" class="form-control" name="pengunjung">
                                    </select></div>
                                    <div class="form-group">
                                        <label>kamar</label>
                                        <label>:</label>
                                        <select id="kamar" class="form-control" name="kamar">
                                    </select></div>
                                    <div class="form-group">
                                        <label>lama_hari</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" name="lama_hari">
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
                        <form role="form" id="Form-Edit">
                            <div class="row">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label>pengunjung</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="pengunjung" >
                                </div>
                                <div class="form-group">
                                    <label>kamar</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="kamar" >
                                </div>
                                <div class="form-group">
                                    <label>lama_hari</label>
                                    <label>:</label>
                                    <input type="text" class="form-control" name="lama_hari" >
                                </div>

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
                    <h4><font face="impact">DETAIL lama hari</font></h4>

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
                        pengunjung = $form.find("select[name='pengunjung']").val(),
                        kamar = $form.find("select[name='kamar']").val(),
                        lama_hari = $form.find("input[name='lama_hari']").val();


                var posting = $.post('/lama_hari', {
                    pengunjung: pengunjung,
                    kamar: kamar,
                    lama_hari: lama_hari


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
                        pengunjung = $form.find("input[name='pengunjung']").val(),
                        kamar = $form.find("input[name='kamar']").val(),
                        lama_hari = $form.find("input[name='lama_hari']").val();
                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/lama_hari/' + id,
                    data: {

                        pengunjung: pengunjung,
                        kamar: kamar,
                        lama_hari: lama_hari

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
            document.getElementById("Form-Edit").reset();
        }

        getAjax();
        function Create() {
            $('#Index').hide();
            $('#Edit').hide();
            $('#Create').show();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            getPengunjung();
            getKamar();
        }
        function getPengunjung() {
            $('#pengunjung').children().remove();
            $.getJSON("/data-pengunjung", function(data) {
                var jumlah = data.length;
                $("#pengunjung").append("<option selected>pilih pengunjung</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#pengunjung").append("<option value='" + data.id + "'>" + data.name + "</option>");
                })
            });

        }
        function getKamar() {
            $('#kamar').children().remove();
            $.getJSON("/data-kamar", function(data) {
                var jumlah = data.length;
                $("#kamar").append("<option selected>pilih kamar</option>");
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#kamar").append("<option value='" + data.id + "'>" + data.nomor + "</option>");
                })
            });

        }
        function getAjax() {
            $("#data-example").children().remove();
            $("#loader2").delay(2000).animate({
                opacity: 0,
                width: 0,
                height: 0
            }, 500);
            setTimeout(function () {
                $.getJSON("/data-lama_hari", function (data) {
                    var jumlah = data.length;
                    $.each(data.slice(0, jumlah), function (i, data) {
                        $("#data-example").append("<tr><td>" + data.pengunjung.name + "</td><td>" + data.kamar.nama + "</td><td>" + data.lama_hari + "</td><td><button type='button' class='btn bttn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button><button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button><button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");

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
                        url: '/lama_hari/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.pengunjung);
//                        var $form = $(this),
                        id = $("input[name='id']").val(data.id);
                        pengunjung = $("input[name='pengunjung']").val(data.pengunjung);
                        kamar = $("input[name='kamar']").val(data.kamar);
                        lama_hari = $("input[name='lama_hari']").val(data.lama_hari);

                        $('#Edit').show();
                    });
        }
        // Set data on modal body
        function Detail(id) {
//            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/lama_hari/' + id,
                data: {},
                beforeSend: function () {
//                    $("#loader-wrapper").show();

                },
                success: function (data) {
                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td>pengunjung</td><td>:</td><td>" + data.pengunjung.name + "</td></tr>" +
                            "<tr><td>kamar</td><td>:</td><td>" + data.kamar.nomor + "</td></tr>" +
                            "<tr><td>lama_hari</td><td>:</td><td>" + data.lama_hari + "</td></tr>"

                    );
                }

            });
        }
        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin ingin Menghapus ?");
            if (result) {
                $.ajax({
                            method: "DELETE",
                            url: '/lama_hari/' + id,
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
