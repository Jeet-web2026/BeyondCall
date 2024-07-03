<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [app\Http\Controllers\Controller, "index"]);