<?php

use App\Http\Controllers\Admin\ExController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hi ini dashboard asd  ';
});

// Login
Route::get('login', 'LoginController@index')->name('login');
Route::post('dashboard', 'LoginController@login')->name('dashboard');

//Register
Route::get('register', 'RegisterController@index')->name('register');
Route::post('dash', 'RegisterController@register')->name('dash');

// Setiap route coba di kasih name kaya dibawah biar enak manggilnya
Route::get('/ex', 'ExController@index')->name('ex.index');
Route::get('chart', 'ChartController@index')->name('chart.index');

//Routing JawabanKuisioner
Route::get('/jawaban', 'JawabanController@index')->name('jawaban.index');
Route::get('/jawaban/tambah', 'JawabanController@tambah')->name('jawaban.tambah');
Route::post('/jawaban/new', 'JawabanController@new')->name('jawaban.new');
Route::get('/jawaban/edit/{id}', 'JawabanController@edit')->name('jawaban.edit');
Route::put('/jawaban/update', 'JawabanController@update')->name('jawaban.update');
Route::get('/jawaban/hapus/{id}', 'JawabanController@hapus')->name('jawaban.hapus');

//Routing KuisionerKelas
Route::get('/pertanyaan', 'KuisionerController@index')->name('pertanyaan.index');
Route::get('/pertanyaan/tambah', 'KuisionerController@tambah')->name('pertanyaan.tambah');
Route::post('/pertanyaan/baru', 'KuisionerController@baru')->name('pertanyaan.baru');
Route::get('/pertanyaan/edit/{id}', 'KuisionerController@edit')->name('pertanyaan.edit');
Route::put('/pertanyaan/update', 'KuisionerController@update')->name('pertanyaan.update');
Route::get('/pertanyaan/hapus/{id}', 'KuisionerController@hapus')->name('pertanyaan.hapus');

//Routing Kelas
Route::get('kelas', 'KelasController@index')->name('kelas.index');
Route::get('/kelas/tambah', 'KelasController@tambah')->name('kelas.tambah');
Route::post('/kelas/new', 'KelasController@new')->name('kelas.new');
Route::get('/kelas/edit/{id}', 'KelasController@edit')->name('kelas.edit');
Route::put('/kelas/update', 'KelasController@update')->name('kelas.update');
Route::get('/kelas/hapus/{id}', 'KelasController@hapus')->name('kelas.hapus');

//Routing Dosen
Route::get('dosen', 'DosenController@index')->name('dosen.index');
Route::get('/dosen/tambah', 'DosenController@tambah')->name('dosen.tambah');
Route::post('/dosen/new', 'DosenController@new')->name('dosen.new');
Route::get('/dosen/edit/{id}', 'DosenController@edit')->name('dosen.edit');
Route::put('/dosen/update', 'DosenController@update')->name('dosen.update');
Route::get('/dosen/hapus/{id}', 'DosenController@hapus')->name('dosen.hapus');

//Routing Prodi
Route::get('prodi', 'ProdiController@index')->name('prodi.index');
Route::get('/prodi/tambah', 'ProdiController@tambah')->name('prodi.tambah');
Route::post('/prodi/new', 'ProdiController@new')->name('prodi.new');
Route::get('/prodi/edit/{id}', 'ProdiController@edit')->name('prodi.edit');
Route::put('/prodi/update', 'ProdiController@update')->name('prodi.update');
Route::get('prodi/hapus/{id}', 'ProdiController@hapus')->name('prodi.hapus');

//Routing Matakuliah
Route::get('matkul', 'MatakuliahController@index')->name('matkul.index');
Route::get('/matkul/tambah', 'MatakuliahController@tambah')->name('matkul.tambah');
Route::post('/matkul/new', 'MatakuliahController@new')->name('matkul.new');
Route::get('/matkul/edit/{id}', 'MatakuliahController@edit')->name('matkul.edit');
Route::put('/matkul/update', 'MatakuliahController@update')->name('matkul.update');
Route::get('/matkul/hapus/{id}', 'MatakuliahController@hapus')->name('matkul.hapus');

//Routing adminlte3
//   Auth::routes();

//   Route::get('/home', 'HomeController@index')->name('home');
