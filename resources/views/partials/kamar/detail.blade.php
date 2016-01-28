@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header"> kamar</h1>
           </div>
       </div>

       <div class="row">
           <div class="col-lg-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                      {{ $kamar->id }}
                   </div>
                   <div class="panel-body">
                       <form role="form">
                           @if (count($kamar))
                               <div class="row">
                                   <div class="col-lg-6">
                                       <table class="table">
                                           <tr>
                                               <td><label>nomor</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $kamar->nomor }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>nama</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $kamar->nama }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>tipe</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $kamar->tipe }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>fasilitas</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $kamar->fasilitas }}</label></td>
                                           </tr>

                                           <td colspan="2"></td>
                                           <td>
                                               <button type="button" class="btn btn-outline btn-info"
                                                       onclick="location.href='/edit-kamar/{{ $kamar->id }}}';">Edit
                                               </button>
                                               <button type="button" class="btn btn-outline btn-primary"
                                                       onclick="location.href='/kamar';">Kembali
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