<?php

namespace App\Providers;

use App\Repositories\EloquentSeriesRepository;
use App\Repositories\SeriesRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{
    public array $bindings=[
        SeriesRepositoryInterface::class => EloquentSeriesRepository::class
    ];


    /**
     * Register services.
     * Esse metodo é executado para ensinar o service container o que deve ser feito.
     * nesse caso seria ligar o SeriesRepositoryInterface ao EloquentSeriesRepository
     
    *public function register(): void
    *{
    *   $this->app->bind(SeriesRepositoryInterface::class,EloquentSeriesRepository::class);
    *}
    */

    
}
