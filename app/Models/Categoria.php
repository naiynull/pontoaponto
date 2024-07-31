<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nomecategoria'];
    public function Produto(){
        return $this->hasMany('App\Models\Produto', 'categorias_id');
    }
}
