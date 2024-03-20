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
Route::post('/edittrades', [cryptocoincontroller::class,'newtrade'])->name('newtrade');

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */