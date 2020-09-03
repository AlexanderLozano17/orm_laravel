<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticulosClientes extends Model
{

    protected $table = 'articulos_clientes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'cliente_id',
        'articulo_id'
    ];
    
}
