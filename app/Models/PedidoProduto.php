<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    use HasFactory;
    protected $fillable = ['quant'];
    public function Pedido(){
        return $this->belongsTo('App\Models\Pedido');
    }
    public function Produto(){
        return $this->belongsTo('App\Models\Produto');
    }
}
