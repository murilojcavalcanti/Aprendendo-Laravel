<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $fillable=['nome'];
    
    //para puxar as temporadas
    protected $with=['seasons'];

    //metodo de relacionamento : 1 para muitos
    public function seasons(){//classe    chave estrangeira que a classe se ralciona               
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
