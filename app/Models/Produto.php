<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['nomeproduto', 'estoqueproduto', 'precoproduto', 'materialproduto' ];
    public function PedidoProduto(){
        return $this->hasMany('App\Models\PedidoProduto', 'produtos_id');
}

    public function Categoria(){
        return $this->hasMany('App\Models\Produto');
}
}
