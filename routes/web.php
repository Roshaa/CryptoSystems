<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cryptocoincontroller;

Route::get('/', function () {
    return redirect('/homepage');
});
Route::get('/homepage', [cryptocoincontroller::class,'index'])->name('homepage');

Route::post('/newcoin', [cryptocoincontroller::class,'newcoin'])->name('newcoin');
Route::post('/newtrade', [cryptocoincontroller::class,'newtrade'])->name('newtrade');
Route::post('/closetrade', [cryptocoincontroller::class,'closetrade'])->name('closetrade');
Route::post('/newstrategy', [cryptocoincontroller::class,'newstrategy'])->name('newstrategy');
Route::post('/incrementwin', [cryptocoincontroller::class,'incrementwin'])->name('incrementwin');
Route::post('/incrementloss', [cryptocoincontroller::class,'incrementloss'])->name('incrementloss');

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */