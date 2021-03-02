@extends('adminlte::page')

@section('title', 'Matakuliah')

@section('content_header')

@stop

@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Matakuliah <strong>Tambah Matakuliah</strong>
            </div>
            <div class="card-body">
            <a href="{{route('matkul.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('matkul.new')}}" method="POST">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id matkul">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div> -->
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama matkul">
                        @if ($errors->has('nama'))
                            <div class="text-danger">
                                {{$errors->first('nama')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Sks</label>
                        <input type="text" name="sks" class="form-control" placeholder="sks">
                        @if ($errors->has('sks'))
                            <div class="text-danger">
                                {{$errors->first('sks')}}
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
