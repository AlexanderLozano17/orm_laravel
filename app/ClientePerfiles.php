<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientePerfiles extends Model
{
    protected $table = 'cliente_perfil';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'cliente_id', 'perfil_id'];
}
