<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;
    protected $fillable = ['metroslinha', 'custofrete', 'precofinal'];
    public function Pedidos(){
        return $this->belongsTo('App\Models\Pedidos');
    }
    public function cliente(){
        return $this->belongsTo('App\Models\cliente');
    }
}
