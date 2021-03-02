@extends('adminlte::page')

@section('title', 'Prodi')

@section('content_header')
    <h1>Tambah Prodi</h1>
@stop

@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Prodi <strong>Tambah Prodi</strong>
            </div>
            <div class="card-body">
            <a href="{{route('prodi.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('prodi.new')}}" method="POST">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id Prodi">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div> -->
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Prodi">
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
