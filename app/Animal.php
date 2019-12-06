<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table= 'tb_animal';
    protected $fillable= ['nome','sexo','especie','raca','idade','porte','descricao','vacinacao','castrado','id_dono'];
}