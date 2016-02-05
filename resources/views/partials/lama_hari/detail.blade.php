@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header"> lama_hari</h1>
           </div>
       </div>

       <div class="row">
           <div class="col-lg-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                      {{ $lama_hari->id }}
                   </div>
                   <div class="panel-body">
                       <form role="form">
                           @if (count($lama_hari))
                               <div class="row">
                                   <div class="col-lg-6">
                                       <table class="table">
                                           <tr>
                                               <td><label>pengunjung</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $lama_hari->pengunjung }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>kamar</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $lama_hari->kamar }}</label></td>
                                           </tr>
                                           <tr>
                                               <td><label>lama_hari</label></td>
                                               <td><label>:</label></td>
                                               <td><label>{{ $lama_hari->lama_hari }}</label></td>
                                           </tr>


                                           <td colspan="2"></td>
                                           <td>
                                               <button type="button" class="btn btn-outline btn-info"
                                                       onclick="location.href='/edit-lama_hari/{{ $lama_hari->id }}}';">Edit
                                               </button>
                                               <button type="button" class="btn btn-outline btn-primary"
                                                       onclick="location.href='/lama_hari';">Kembali
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