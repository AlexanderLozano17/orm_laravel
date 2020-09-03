<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfils';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nombre'];
}
