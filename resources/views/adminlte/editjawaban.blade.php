@extends('adminlte::page')

@section('title', 'jawaban')

@section('content_header')
    <h1>JAWABAN</h1>
@stop

@section('content')
<div class="container">
       <div class="card mt-5">
           <div class="card-header text-center">
               CRUD Jawaban - <strong>EDIT JAWABAN</strong>
           </div>
           <div class="card-body">
            <a href="{{route('jawaban.index')}}" class="btn btn-primary">Kembali</a>
            <br><br>

            <!-- <form action="jawaban,edit.{{$jawaban->id}}" method="POST"> -->
            <form action="{{route('jawaban.update', $jawaban)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('put')}}

                <!-- <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id" class="form-control" placeholder="Id Jawaban" value=" {{ $jawaban->id}}">

                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{ $errors->first('id')}}
                        </div>
                    @endif
                </div> -->

           </div>
           <div class="form-group">
               <label>Jawaban</label>
               <textarea name="jawaban" class="from-control" placeholder=" Jawaban...">{{ $jawaban->jawaban}}</textarea>

               @if ($errors->has('jawaban'))
                   <div class="text-danger">
                       {{ $errors->first('jawaban')}}
                   </div>
               @endif
           </div>
           <div class="form-group">
               <input type="submit" class="btn btn-success" value="Simpan">
           </div>
       </div>
       </form>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>console.log('HI!')</script>
@stop
