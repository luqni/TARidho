@extends('adminlte::page')

@section('title', 'Prodi')

@section('content_header')
    <h1>Prodi</h1>
@stop

@section('content')
<div class="container">
       <div class="card mt-5">
           <div class="card-header text-center">
               CRUD Prodi - <strong>EDIT PRODI</strong>
           </div>
           <div class="card-body">
               <a href="{{route('prodi.index')}}" class="btn btn-primary">Kembali</a>
               <br><br>
               <form action="prodi/update/{{ $prodi->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('put')}}
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id" class="form-control" placeholder="Id Prodi" value="{{ $prodi->id}}">

                    @if ($errors->has($id))
                        <div class="text-danger">
                            {{ $errors->first('id')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Prodi" value="{{ $prodi->nama}}">

                    @if ($errors->has($id))
                        <div class="text-danger">
                            {{$errors->first('nama')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="simpan">
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
