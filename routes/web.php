<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});

//usando resource                                   usamos para mostra as rotas que não queremos
Route::resource('/series',SeriesController::class)-> except(['show']);
//usamos para mostrar as rotas que queremos
//only(['index','create','store','destroy','edit']) ;

//usando group
/*Route::controller(SeriesController::class)->group(function(){
  
    Route::get('/series','index')->name('series.index');
    Route::get('/series/criar','create')->name('series.create');
    Route::post('/series/salvar','store')->name('series.store');
    Route::delete('/series/destroy/{serie}','destroy')->name('series.destroy');
});*/
