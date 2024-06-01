<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');
    Route::post('/update', 'App\Http\Controllers\HomeController@update')->name('update');
});
