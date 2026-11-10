<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelanggan', function () {
    return view('pelanggan.index', ['title' => 'Pelanggan']);
});

Route::get('/pelanggan/create', function () {
    return view('pelanggan.create', ['title' => 'create Pelanggan']);
});