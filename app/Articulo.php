<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    

    public function cliente() // Uno a muchos Relación inversa
    {
        return $this->belongsTo("App\Cliente");
    }

    public function calificaciones() // Relación polimorfica
    {
        return $this->morphMany('App\Calificaciones', 'calificacion');
    }

    public function articulosCliente()
    {
        return $this->belongsToMany(ArticulosClientes::class);
    }
}
