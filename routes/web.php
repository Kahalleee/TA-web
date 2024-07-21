<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return "<h1>Tes</h1>";
});

Route::get('/presensi/presensi-view', function () {
    return view('presensi/presensi-view');
});

Route::get('/presensi/presensi-view-detail', function () {
    return view('presensi/presensi-view-detail');
});


Route::get('/kelas/kelas-view', function () {
    return view('kelas/kelas-view');
});

Route::get('/kelas/kelas-view-detail', function () {
    return view('kelas/kelas-view-detail');
});

Route::get('/kelas/kelas-input', function () {
    return view('kelas/kelas-input');
});

Route::get('/kelas/kelas-update', function () {
    return view('kelas/kelas-update');
});


Route::get('/mahasiswa/mahasiswa-view', function () {
    return view('mahasiswa/mahasiswa-view');
});

Route::get('/mahasiswa/mahasiswa-view-detail', function () {
    return view('mahasiswa/mahasiswa-view-detail');
});

Route::get('/mahasiswa/mahasiswa-input', function () {
    return view('mahasiswa/mahasiswa-input');
});

Route::get('/mahasiswa/mahasiswa-update', function () {
    return view('mahasiswa/mahasiswa-update');
});


Route::get('/dosen/dosen-view', function () {
    return view('dosen/dosen-view');
});

Route::get('/dosen/dosen-view-detail', function () {
    return view('dosen/dosen-view-detail');
});

Route::get('/dosen/dosen-input', function () {
    return view('dosen/dosen-input');
});

Route::get('/dosen/dosen-update', function () {
    return view('dosen/dosen-update');
});
