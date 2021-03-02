@extends('adminlte::page')

@section('title', 'Kelas')

@section('content_header')
    <h1>KELAS</h1>
@stop

@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Kelas - <strong>EDIT KELAS</strong>
            </div>
            <div class="card-body">
                <a href="{{route('kelas.index< $kelas')}}" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>


                <form method="post" action="kelas/update/{{ $kelas->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" placeholder="Id Pertanyaan" value=" {{ $kelas->id }}">

                        @if($errors->has('Id'))
                            <div class="text-danger">
                                {{ $errors->first('Id')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control" placeholder="kode" value=" {{ $kelas->kode }}">

                         @if($errors->has('kelas'))
                            <div class="text-danger">
                                {{ $errors->first('kelas')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>semester</label>
                        <input type="text" name="semester" class="form-control" placeholder="aktif" value="{{$kelas->semester}}">

                        @if ($errors->has('semester'))
                            <div class="text-danger">
                                {{$errors->fisrt('semester')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>dosen</label>
                        <input type="text" name="dosen_id" class="form-control" placeholder="choice" value="{{$kelas->dosen_id}}">

                        @if ($errors->has('dosen_id'))
                            <div class="text-danger">
                                {{$errors->first('dosen_id')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>matakuliah</label>
                        <input type="text" name="matakuliah_id" class="form-control" placeholder="choice" value="{{$kelas->matakuliah_id}}">

                        @if ($errors->has('matakuliah_id'))
                            <div class="text-danger">
                                {{$errors->first('matakuliah_id')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>prodi</label>
                        <input type="text" name="prodi_id" class="form-control" placeholder="choice" value="{{$kelas->prodi_id}}">

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
