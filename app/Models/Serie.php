<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable=['nome'];
    
    //para puxar as temporadas
    protected $with=['temporadas'];

    //metodo de relacionamento : 1 para muitos
    public function temporadas(){//classe    chave estrangeira que a classe se ralciona               
        return $this->hasMany(Season::class,'series_id');
    }
/*
criação de escopo global
    protected static function booted()
    {
        self::addGlobalScope('orderes',function(Builder $queryBuilder)
        {
            $queryBuilder->orderBy('nome');
        });
    }*/

}
