 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
     <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 400px !important;
        }
     </style>
     <title>Form Evaluasi Dosen</title>
 </head>
 <body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>Form Evaluasi Dosen</strong>
            </div>
            <div class="card-body">
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="text" name="nim" class="form-control" placeholder="Nim">
                        @if ($errors->has('nim'))
                            <div class="text-danger">
                                {{$errors->first('nim')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" name="kelas" class="form-control" placeholder="Kelas">
                        @if ($errors->has('kelas'))
                            <div class="text-danger">
                                {{$errors->first('kelas')}}
                            </div>
                        @endif
                    </div>
                    {{-- <div class="form-group">
                        <label>Pelaksanaan Kuliah Dimulai & Diakhiri tepat waktu</label> <br>

                        <select class="form-control" name="pertanyaan_id" multiple="">
                            <option value="1">Sangat tidak setuju</option>
                            <option value="2">Tidak setuju</option>
                            <option value="3">Agak setuju</option>
                            <option value="4">Setuju</option>
                            <option value="5">Sangat setuju</option>
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label>Pertanyaan_id</label> <br>
                        <select class="form-control" name="pertanyaan_id" multiple="" >
                            <option value="">Pilih Option</option>
                            @foreach ($kuesionerkelas ?? '' as $item)
                                <option value="{{$kuisionerkelas->id}}">{{$kuesionerkelas ?? ''->pertanyaan_id}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jawaban_id</label> <br>
                        <select class="form-control" name="jawaban_id" multiple="">
                            <option value="">Pilih Option</option>
                            @foreach ($kuesionerkelas ?? '' as $item)
                                <option value="{{$kuisionerkelas->id}}">{{$kuesionerkelas ?? ''->jawaban_id}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Diskusi materi & pembahasan tugas/ujian berjalan baik, didalam/luar kelas</label> <br>
                        <select class="form-control" name="pertanyaan_id" multiple="">
                            <option value="1">Sangat tidak setuju</option>
                            <option value="2">Tidak setuju</option>
                            <option value="3">Agak setuju</option>
                            <option value="4">Setuju</option>
                            <option value="5">Sangat setuju</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ada saran yang diberikan untuk dosen terkait</label>
                        <input type="text" name="content" class="form-control" placeholder="Jawaban">

                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
 </body>
 <!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
 </html>
