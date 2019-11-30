<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dono extends Model
{
    protected $table= 'tb_dono';
    protected $fillable= ['nome','cpf','sexo','dataNascimento','rua','numero','bairro', 'estado', 'cidade', 'email', 'telefone'];
}
