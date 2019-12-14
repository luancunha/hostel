<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedes', function (Blueprint $table) {
            $table->engine = "MyISAM";
            $table->bigIncrements('id');
            $table->string('nome');
            $table->date('datanasc');
            $table->string('profissao');
            $table->string('nacionalidade');
            $table->string('sexo');
            $table->string('numdoc');
            $table->string('tipodoc');
            $table->string('org')->nullable();
            $table->string('endereco');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');
            $table->string('ultdestino')->nullable();
            $table->string('proxdestino')->nullable();
            $table->string('motivo');
            $table->string('transporte');
            $table->string('email');
            $table->integer('usuario');
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
        Schema::dropIfExists('hospedes');
    }
}
