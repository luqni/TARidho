@extends('adminlte::page')

@section('title', 'Kelas')

@section('content_header')
    <h1>Kelas</h1>
@stop

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <div class="card-body">

                {{-- jadi cara pemanggilan menggunakan Name kaya gini --}}
                <a href="{{route('kelas.tambah')}}" class="btn btn-primary">Input Pertanyaan Baru</a>
                <br><br>
                <table class="table table-bordered table-haver table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Semester</th>
                            <th>Dosen</th>
                            <th>matakuliah</th>
                            <th>Prodi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 0;
                         foreach ($kelas as $k): $no++ ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td>{{ $k->kode}}</td>
                                <td>{{ $k->semester}}</td>
                                <td>{{ $k->dosen_id}}</td>
                                <td>{{ $k->matakuliah_id}}</td>
                                <td>{{ $k->prodi_id}}</td>
                                <td>
                                    <a href="{{route('kelas.edit', $k->id )}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('kelas.hapus', $k->id )}}" class="btn btn-warning">Hapus</a>
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
    <script>consle.log('HI!')</script>
@stop
