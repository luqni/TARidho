@extends('adminlte::page')

@section('title', 'pertanyaan')

@section('content_header')
    <h1>Tambah Pertanyaan</h1>
@stop

@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Pertanyaan <strong>Tambah Pertanyaan</strong>
            </div>
            <div class="card-body">
            <a href="{{route('pertanyaan.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('pertanyaan.baru')}}" method="POST">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id pertanyaan">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div> -->
                    <div class="form-group">
                        <label>pertanyaan</label>
                        <textarea name="pertanyaan" class="form-control" placeholder="Pertanyaan"></textarea>
                        @if ($errors->has('pertanyaan'))
                            <div class="text-danger">
                                {{$errors->first('pertanyaan')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Aktif</label>
                        <input type="text" name="aktif" class="form-control" placeholder="aktif">
                        @if ($errors->has('aktif'))
                            <div class="text-danger">
                                {{$errors->first('aktif')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Choice</label>
                        <input type="text" name="choice" class="form-control" placeholder="choice">
                        @if ($errors->has('choice'))
                            <div class="text-danger">
                                {{$errors->first('choice')}}
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
