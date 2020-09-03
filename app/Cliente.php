<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nombre',
        'apellidos'
    ];


    public function articulo() // Relación uno a uno
    {
        return $this->hasOne("App\Articulo");
    }

    public function articulos() // Relación uno a muchos
    {
        return $this->hasMany("App\Articulo");
    }

    public function perfils() // Relacion muchos a muchos
    {
        return $this->belongsToMany("App\Perfil");
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
