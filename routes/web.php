<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hallo', function () {
    return view('hallo', ['nama' => 'IK2', 'alamat' => 'Jl. Kemana Aja', 'tittle' => 'Hallo']);
});

Route::get('/login', function () {
    $nama = 'Gangga Vidya Anggelika';

    $lampu =1;
    
    $kelas = env('KELAS', 'Data kelas tidak ada');

    $nilai = "A";

    $perulangan_for = 100;

    $hobi_banyak = [
        'Travelling',
        'Menyanyi',
        'Mendengarkan Musik',
        'Memasak',
    ];

    return view('admin.login', [
        'nama' => $nama,
        'kelas' => $kelas,
        'lampu' => $lampu,
        'nilai' => $nilai,
        'limit' => $perulangan_for,
        'hobbies' => $hobi_banyak,

    ]);  
});


