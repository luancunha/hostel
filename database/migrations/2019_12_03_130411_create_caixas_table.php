<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caixas', function (Blueprint $table) {
            $table->engine = "MyISAM";
            $table->bigIncrements('idcaixa');
            $table->integer('usuario');
            $table->string('descricao');
            $table->float('valor', 10, 2);
            $table->dateTime('data_hora');
            $table->enum('tipo', ['Crédito', 'Débito']);
            $table->timestamps();

            $table->foreign('usuario')->references('iduser')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caixas');
    }
}
