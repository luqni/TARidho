
@extends('adminlte::page')

@section('title', 'EditDosen')

@section('content_header')

@stop

@section('content')
<div class="container">
       <div class="card mt-5">
           <div class="card-header text-center">
               CRUD Dosen - <strong>EDIT DOSEN</strong>
           </div>
           <div class="card-body">
               <a href="{{route('dosen.index')}}" class="btn btn-primary">Kembali</a>
               <br><br>
               <form method="POST" action="dosen/update/{{$dosen->id}}">
                 {{ csrf_field() }}
                 {{method_field('put')}}

                 <!-- <div class="form-group">
                     <label>Id</label>
                     <input type="text" name="id" class="form-control" placeholder="Id dosen" value="{{$dosen->id}}">

                     @if ($errors->has('id'))
                         <div class="text-danger">
                             {{$errors->first('id')}}
                         </div>
                     @endif
                 </div> -->
                 <div class="form-group">
                     <label>Nama</label>
                     <textarea name="nama" class="form-control" placeholder="Nama Dosen"> {{$dosen->nama}}</textarea>

                     @if ($errors->has('nama'))
                         <div class="text-danger">
                             {{$errors->first('nama')}}
                         </div>
                     @endif
                 </div>
                 <div class="form-group">
                     <input type="submit" class="btn btn-success" value="Simpan">
                 </div>
               </form>
           </div>
       </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>console.log('HI!')</script>
@stop
