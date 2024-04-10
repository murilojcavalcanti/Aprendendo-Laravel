<?php

use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series',SeriesController::class)-> except(['show']);
Route::get('/series/{series}/seasons',[SeasonController::class,'index'])->name('seasons.index');
