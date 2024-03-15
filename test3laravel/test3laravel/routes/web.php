<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [ Users::class,'users']);