<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
</head>
<body>
    <h2>Kelas</h2>
    <a href="/kelas">Kembali</a>
    <br><br>
    <form action="/kelas/new" method="POST">
       {{ csrf_field() }}
       id <input type="text" name="id" required="required"><br>
       kode <input type="text" name="kode" required="required"><br>
       semester <input type="number" name="semester" required="required"><br>
       dosen_id <input type="number" name="dosen_id" required="required"><br>
       matakuliah_id <input type="number" name="matakuliah_id" required="required"><br>
       prodi_id <input type="number" name="prodi_id" required="required"> <br>
       <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
