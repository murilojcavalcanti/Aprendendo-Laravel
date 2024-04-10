<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    use HasFactory;
    protected $fillable = ['number'];

    //metodo de relacionamento
    public function series(){
        return $this->belongsTo(Serie::class);
    }
}
