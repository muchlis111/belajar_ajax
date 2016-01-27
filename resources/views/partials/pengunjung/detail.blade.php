@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header"> Pengunjung</h1>
           </div>
       </div>

       <div class="row">
           <div class="col-lg-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       detail pengunjung #{{ $pengunjung->id }}
                   </div>
                   <div class="panel-body">
                       <form role="form">
                           @if (count($pengunjung)) > 0)
                               <div class="row">
                                   <div class="col-lg-6">
                                       <table class="table">
                                           <tr>
                                               <td><label>nama</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $pengunjung->name }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>alamat</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $pengunjung->alamat }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>umur</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $pengunjung->umur }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>jenis_kelamin</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $pengunjung->jenis_kelamin }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>jenis_Kamar</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $pengunjung->jenis_kamar }}</label></td>
                                           </tr>
                                           <td colspan="2"></td>
                                           <td>
                                               <button type="button" class="btn btn-outline btn-info"
                                                       onclick="location.href='/edit-pengunjung/{{ $pengunjung->id }}}';">Edit
                                               </button>
                                               <button type="button" class="btn btn-outline btn-primary"
                                                       onclick="location.href='/pengunjung';">Kembali
                                               </button>
                                           </td>
                                           </tr>
                                       </table>
                                   </div>
                               </div>
                           @endif
                       </form>
                   </div>
               </div>
           </div>
       </div>
@endsection