<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SeriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series',SeriesController::class)-> except(['show']);
Route::get('/series/{series}/seasons',[SeasonController::class,'index'])->name('seasons.index');
Route::get('/seasons/{season}/episodes',[EpisodesController::class,'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', function(Request $request){
    dd($request->all());
});