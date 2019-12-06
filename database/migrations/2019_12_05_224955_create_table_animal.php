<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAnimal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('tb_animal', function (Blueprint $table) {
            $table->bigIncrements('id');   
            $table->string('nome');
            $table->char('sexo');
            $table->string('especie');
            $table->string('raca');
            $table->integer('idade');
            $table->string('porte');
            $table->string('descricao')->nullable($value = true);
            $table->boolean('vacinacao');
            $table->boolean('castrado');
            //$table->text('foto');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_animal');
    }
}
