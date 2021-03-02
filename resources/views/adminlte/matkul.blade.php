@extends('adminlte::page')

@section('title', 'Matkul')

@section('content_header')
    <h1>Matakuliah</h1>
@stop

@section('content')
<div class="container">
    <div class="card m-5">
        <div class="card-header text-center">
            <div class="card-body">
                <a href="{{route('matkul.tambah')}}" class="btn btn-primary">Tambah Matkul</a>
                <br><br>
                <table class="table table-bordered table-haver table-striped">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama</th>
                             <th>Sks</th>
                         </tr>
                     </thead>
                     <tbody>
                     <?php
                     $no = 0 ;
                         foreach ($matakuliah as $m): $no++
                         ?>
                             <tr>
                                 <td>{{$m->id}}</td>
                                 <td>{{$m->nama}}</td>
                                 <td>{{$m->sks}}</td>
                                 <td>
                                    <a href="{{route('matkul.edit', $m->id )}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('matkul.hapus', $m->id )}}" class="btn btn-warning">Hapus</a>
                                 </td>
                             </tr>
                         <?php endforeach;?>
                     </tbody>
                </table>
            </div>
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
