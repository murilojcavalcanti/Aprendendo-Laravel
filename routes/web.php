<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});
//usando resource
Route::resource('/series',SeriesController::class)-> except(['show']);
//para n ficar muito grande vamos usar o except
//only(['index','create','store','destroy','edit','update']);

//usando group
/*Route::controller(SeriesController::class)->group(function(){
  
    Route::get('/series','index')->name('series.index');
    Route::get('/series/criar','create')->name('series.create');
    Route::post('/series/salvar','store')->name('series.store');
    Route::delete('/series/destroy/{serie}','destroy')->name('series.destroy');
});*/
