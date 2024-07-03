<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller.php;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [app\Http\Controllers\Controller.php, "index"]);