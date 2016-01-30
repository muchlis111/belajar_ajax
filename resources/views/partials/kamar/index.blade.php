@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

    <body onload="index()">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><marque>kamar</marque></h1>
        </div>
    </div>
<div id="index"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DATA KAMAR
                </div>

                <button onclick="Create"()><i class="glyphicon glyphicon-plus"></i>tambah
                </button>

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
                                                        onclick="location.href='/detail/{{ $data->id }}';">Detail
                                                </button>
                                                <button type="button" class="btn btn-outline btn-info"
                                                        onclick="Edit({{ $data->id }})">Edit
                                                </button>
                                                <button type="button" class="btn btn-outline btn-danger"
                                                        id="Delete" onclick="Hapus({{ $data->id }})">
                                                    Delete
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <form  method="post">
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
    <script src="{!!  asset('bower_component/jquery/dist/jquery.min.js') !!}"></script>
    <script>
      $(document).ready(function(){
          $("#Form-Create").submit(function (event) {

              event.preventDefault();
              var $form = $ (this),
                      nomor = $form.find("input[kamar='alamat']").val(),
                      nama = $form.find("input[kamar='nama']").val(),
                      tipe = $form.find("input[kamar='tipe']").val(),
                      fasilitas = $form.find("input[kamar='fasilitas']").val();

              //       $("#Form-Create").reset();
                       var posting = $.post('/buku', {
                           nomor: nomor,
                           nama: nama,
                           tipe: tipe,
                           fasilitas: fasilitas
                       });

          //put the result in a div

              // Put the results in a div
              posting.done(function (data) {
//                    console.log(data);
                  window.alert(data.result.message);
                  document.getElementById("Form-Create").reset();
                  location.reload();
                  $('#create').hide();
                  $('#edit').hide();
                  $('#index').show();
              });
          });
      });

      function Index(){
          $('#create').hide();
          $('#edit').hide();
          $('index').show();

      }
      function create(){
          $('#create').show();
      $('#edit').hide();
      $('index').hide();

      }
      function edit(){
          $('#create').hide();
      $('#edit').show();
      $('index').show();

      }

      function hapus(id) {
          var result = confirm("apakah anda ingin menghapus ?");
          if(result) {
              $.ajax({
                  method : "DELETE",
                  erl: '/kamar/' + id,
                  data:{}
              })
                      .done(function (data){
                          window.alret(data.result.message);
                          location.reload();
                          });
          }

      }

    </script>
    </body>

@endsection

