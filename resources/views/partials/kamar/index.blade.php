@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <body onload="Index()">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <marquee>kamar</marquee></h1>
            <button onclick="Create()"><i class="glyphicon glyphicon-plus"></i>tambah
            </button>
        </div>
    </div>

    <div id="index">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DATA KAMAR
                </div>
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
                                    <tbody id="tampildata">
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
                                <form id="Form-creat">
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
</div>
        <!-- /.row -->
        <div id="edit">
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
                            <form role="form" id="Form-edit">
                                <div class="row">


                                        <div class="form-group">
                                            <label>nomor</label>
                                            <label>:</label>
                                            <input type="text" class="form-control" name="nomor" >
                                        </div>
                                        <div class="form-group">
                                            <label>nama</label>
                                            <label>:</label>
                                            <input type="text" class="form-control" name="nama" >
                                        </div>
                                        <div class="form-group">
                                            <label>tipe</label>
                                            <label>:</label>
                                            <input type="text" class="form-control" name="tipe" >
                                        </div>
                                        <div class="form-group">
                                            <label>fasilitas</label>
                                            <label>:</label>
                                            <input type="text" class="form-control" name="fasilitas" >
                                        </div>

                                        <div class="form-group">
                                            <input class="btn btn-outline btn-info" type="submit" value="simpan">
                                            <button type="button" class="btn btn-outline" btn="primary"
                                                    onclick="location.href='/kamar';">kembali
                                            </button>
                                        </div>
                                    </form>
                                </div>
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
            $.getJSON("/data-kamar", function (data) {
                $.each(data.slice(0,9), function (i, data) {
                    $("#tampildata").append("<tr><td>" + data.nomor + "</td><td>" + data.nama + "</td><td>" + data.tipe + "</td><td>" + data.fasilitas + "</td><td><button type='button' class='btn btn-outline btn-info' onclick='Edit("+ data.id +")'>Edit</button><button type='button' class='btn btn-outline btn-danger' onclick='Hapus("+ data.id +")'>Delete</button></td></tr>");
                })
            });
        }
        function Edit(id) {
            $('#Index').hide();
            $('#Create').hide();
            $('#Edit').hide();
            $.ajax({
                        method: "Get",
                        url: '/kamar/' + id,
                        data: {}
                    })
                    .done(function (data) {
                        console.log(data.nomor);
//                        var $form = $(this),
                        nomor = $("input[name='nomor']").val(data.nomor);
                        nama = $("input[name='nama']").val(data.nama);
                        tipe = $("input[name='tipe']").val(data.tipe);
                        fasilitas = $("input[name='fasilitas']").val(data.fasilitas);
                        $('#Edit').show();
                    });
            $("#Form-Edit").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        nomor = $form.find("input[name='nomor']").val(),
                        nama = $form.find("input[name='nama']").val(),
                        tipe = $form.find("input[name='tipe']").val(),
                        fasilitas = $form.find("input[name='fasilitas']").val();
                $.ajax({
                            method: "PUT",
                            url: '/kamar/' + id,
                            data: {
                               nomor:nomor,
                                nama:nama,
                                tipe:tipe,
                                fasilitas:fasilitas
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

