<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
halaman_home
Route::get('/home', function () {
    return view('home');
Route::get('/login', function () {
    return view('login'); main
});
