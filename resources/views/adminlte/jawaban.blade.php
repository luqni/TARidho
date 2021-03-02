@extends('adminlte::page')

@section('title', 'Jawaban')

@section('content_header')
    <h1>Jawaban</h1>
@stop

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <div class="card-body">

                {{-- jadi cara pemanggilan menggunakan Name kaya gini --}}
                <a href="{{route('jawaban.tambah')}}" class="btn btn-primary">Input Jawaban Baru</a>
                <br><br>
                <table class="table table-bordered table-haver table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($jawaban as $j):$no++ ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td>{{$j->jawaban}}</td>
                            <td>
                                {{-- Ini nanti di ubah jadi kaya diatas --}}
                                <a href="{{route('jawaban.edit', $j->id  )}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('jawaban.hapus', $j->id )}}" class="btn btn-warning">Hapus</a>
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
