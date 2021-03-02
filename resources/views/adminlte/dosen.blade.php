@extends('adminlte::page')

@section('title', 'Dosen')

@section('content_header')
    <h1>Dosen</h1>
@stop

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <div class="card-body">
                <a href="{{route('dosen.tambah')}}" class="btn btn-primary">Input Dosen</a>
                <br><br>
            <table class="table table-bordered tabel-haver table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 0;
                    foreach ($dosen as $d): $no++
                    ?>
                        <tr>
                            <td><?php echo $no?></td>
                            <td>{{$d->nama}}</td>
                            <td>
                                <a href="{{route('dosen.edit', $id ?? '$d')}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('dosen.hapus', $id ?? '$d')}}" class="btn btn-warning">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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
