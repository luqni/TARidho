@extends('adminlte::page')

@section('title','pertanyaan')

@section('content_header')
    <h1>PERTANYAAN</h1>
@stop

@section('content')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Pertanyaan - <strong>EDIT PERTANYAAN</strong>
                </div>
                <div class="card-body">
                    <a href="{{route('pertanyaan.index')}}" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>


                    <form method="post" action="pertanyaan/update/{{ $pertanyaan->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Id</label>
                            <input type="text" name="id" class="form-control" placeholder="Id Pertanyaan" value=" {{ $pertanyaan->id }}">

                            @if($errors->has('Id'))
                                <div class="text-danger">
                                    {{ $errors->first('Id')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Pertanyaan</label>
                            <textarea name="pertanyaan" class="form-control" placeholder="Pertanyaan .."> {{ $pertanyaan->pertanyaan }} </textarea>

                             @if($errors->has('pertanyaan'))
                                <div class="text-danger">
                                    {{ $errors->first('pertanyaan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Aktif</label>
                            <input type="text" name="aktif" class="form-control" placeholder="aktif" value="{{$pertanyaan->aktif}}">

                            @if ($errors->has('aktif'))
                                <div class="text-danger">
                                    {{$errors->fisrt('aktif')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Choice</label>
                            <input type="text" name="choice" class="form-control" placeholder="choice" value="{{$pertanyaan->choice}}">

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
    <script>cconsole.log('HI!')</script>
@stop
