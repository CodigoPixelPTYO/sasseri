<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $fillable = ['nombre','id_modulo','lectura','escritura','edicion','anular','imprimir','usu_crea','estado'];
    // public $timestamps = false;

    public function users()
    {
        return $this->hasMany('App\User');
    }

}
