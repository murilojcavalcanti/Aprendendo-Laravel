<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable=['nome'];

    //metodo de relacionamento : 1 para muitos

    public function temporadas(){//classe    chave estrangeira que a classe se ralciona               
        return $this->hasMany(Season::class,'series_id');
    }

    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
