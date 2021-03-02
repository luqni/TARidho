@extends('adminlte::page')

@section('title','Kelas')

@section('content_header')

@stop

@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Kelas <strong>Tambah Kelas</strong>
            </div>
            <div class="card-body">
            <a href="{{route('kelas.index')}}" class="btn btn-primary">Kembali</a>
                <br><br>

                <form action="{{route('kelas.new')}}" method="POST">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id Kelas">
                        @if ($errors->has('id'))
                            <div class="text-danger">
                                {{$errors->first('id')}}
                            </div>
                        @endif
                    </div> -->
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control" placeholder="Kode">
                        @if ($errors->has('kode'))
                            <div class="text-danger">
                                {{$errors->first('kode')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input type="text" name="semester" class="form-control" placeholder="semester">
                        @if ($errors->has('semester'))
                            <div class="text-danger">
                                {{$errors->first('semester')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Dosen</label>
                        <input type="text" name="dosen_id" class="form-control" placeholder="dosen_id">
                        @if ($errors->has('dosen_id'))
                            <div class="text-danger">
                                {{$errors->first('dosen_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Matakuliah</label>
                        <input type="text" name="matakuliah_id" class="form-control" placeholder="matakuliah_id">
                        @if ($errors->has('matakuliah_id'))
                            <div class="text-danger">
                                {{$errors->first('matakuliah_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Prodi</label>
                        <input type="text" name="prodi_id" class="form-control" placeholder="prodi_id">
                        @if ($errors->has('prodi_id'))
                            <div class="text-danger">
                                {{$errors->first('prodi_id')}}
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
