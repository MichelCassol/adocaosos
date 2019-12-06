<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDono extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    
        Schema::create('tb_dono', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cpf');
            $table->char('sexo');
            $table->string('dataNascimento');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('estado');
            $table->string('cidade');
            $table->string('email');
            $table->string('telefone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_dono');
    }
}
