<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});
//usando resource
Route::resource('/series',SeriesController::class);

//usando group
/*Route::controller(SeriesController::class)->group(function(){
  
    Route::get('/series','index')->name('series.index');
    Route::get('/series/criar','create')->name('series.create');
    Route::post('/series/salvar','store')->name('series.store');
});*/