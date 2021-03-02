@extends('adminlte::page')

@section('title', 'jawaban')

@section('content_header')
    <h1>Jawaban</h1>
@stop

@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Jawaban <strong>Tambah Jawaban</strong>
            </div>
            <div class="card-body">
            <a href="{{route('jawaban.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('jawaban.new')}}" method="POST">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id jawaban">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div> -->
                    <div class="form-group">
                        <label>Jawaban</label>
                        <textarea name="jawaban" class="form-control" placeholder="Jawaban"></textarea>
                        @if ($errors->has('jawaban'))
                            <div class="text-danger">
                                {{$errors->first('jawaban')}}
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
