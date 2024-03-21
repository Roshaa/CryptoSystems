<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cryptocoincontroller;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/edittrades', [cryptocoincontroller::class,'index'])->name('newcoin');

Route::post('/newcoin', [cryptocoincontroller::class,'newcoin'])->name('newcoin');
Route::post('/newtrade', [cryptocoincontroller::class,'newtrade'])->name('newtrade');
Route::post('/closetrade', [cryptocoincontroller::class,'closetrade'])->name('closetrade');

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */