@extends('adminlte::page')

@section('title', 'Matkul')

@section('content_header')
    <h1>MATAKULIAHKUL</h1>
@stop

@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Matkul - <strong>EDIT MATAKULIAH</strong>
            </div>
            <div class="card-body">
                <a href="{{route('matkul.index')}}" class="btn btn-primary">Kembali</a>
            </div>
            <br><br>
            <form method="POST" action="matkul/update/{{$matkul->id}}">
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id" class="form-group" placeholder="id matkul" value="{{ $matkul->id}}">

                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-group" placeholder="nama matkul" value="{{ $matkul->nama}}">

                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Sks</label>
                    <input type="text" name="sks" class="form-group" placeholder="sks matkul" value="{{$matkul->sks}}">

                    @if ($errors->has('sks'))
                        <div class="text-danger">
                            {{$errors->first('sks')}}
                        </div>
                    @endif
                </div>
                <div class="form-gruop">
                    <input type="submit" class="btn btn-success" value="simpan">
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>console.log('HI!')</script>
@stop
