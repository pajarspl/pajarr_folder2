<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    $nama = "pajar";
    $jenis_kelamin = "laki-laki";
    $pendidikan_terakhir = "kuliah";
    $pekerjaan = "bos kelapa sawit";
    $hobi = "masak";
    return view('data_diri', compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan','hobi'));
});

Route::get('/about', function () {
    $senen = "masak";
    $selasa = "bersih-bersih";
    $rabu = "berenang";
    $kamis = "berkuda";
    $jumat = "kumpul keluarga";
    $sabtu = "mantai";
    $minggu = "rebahan";
    return view('kegiatan', compact('senen','selasa','rabu','kamis','jumat','sabtu','minggu'));
});

//variabel
Route::get('/about1', function () {
    $nama = "mulki";
    return view('biodata',compact('nama'));
});

//parameter
Route::get('/about2/{nama}/{jenis_kelamin}/{pendidikan_terakhir}/{pekerjaan}/{alamat}', function (Request $request, $nama, $jenis_kelamin, $pendidikan_terakhir, $pekerjaan, $alamat) {
    $nama1 = "$nama";
    $jenis_kelamin1 = "$jenis_kelamin";
    $pendidikan_terakhir1 = "$pendidikan_terakhir";
    $pekerjaan1 = "$pekerjaan";
    $alamat1 = "$alamat";
    return view('biodata1', compact('nama1','jenis_kelamin1','pendidikan_terakhir1','pekerjaan1','alamat1'));
});