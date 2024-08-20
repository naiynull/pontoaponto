<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $fillable = ['metroslinha', 'custofrete', 'precofinal'];
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }
       
            public function PedidoProduto(){
                return $this->hasMany('App\Models\PedidoProduto', 'pedidos_id');
    }
}
