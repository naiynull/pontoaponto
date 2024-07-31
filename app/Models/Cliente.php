<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nomecliente', 'emailcliente', 'telefonecliente','enderecocliente'];
    public function Pedidos(){
        return $this->hasMany('App\Models\Pedidos', 'cliente_id');
    }
}
