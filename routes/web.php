<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cryptocoincontroller;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/edittrades', function () {
    return view('edittrades');
});
Route::post('/edittrades', [cryptocoincontroller::class,'newcoin'])->name('newcoin');