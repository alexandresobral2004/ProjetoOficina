<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/index');
});

Route::get('/users', function () {
    return view('/layouts/app');
});