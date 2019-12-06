<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkDono extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_dono', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dono');
            $table->foreign('id_dono')->references('id')->on('tb_dono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_dono', function (Blueprint $table) {
            //
        });
    }
}
