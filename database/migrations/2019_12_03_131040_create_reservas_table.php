<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->engine = "MyISAM";
            $table->bigIncrements('idreserva');
            $table->integer('qntp');
            $table->string('id_quarto');
            $table->date('data_e');
            $table->date('data_s');
            $table->dateTime('data_hora');
            $table->enum('status', ['Reservado', 'Check-in', 'Check-out']);

            $table->integer('cod_hospede');
            $table->integer('cod_user');

            $table->enum('pag', ['Aguardando', 'Realizado']);
            $table->timestamps();

            $table->foreign('id_quarto')->references('codquarto')->on('quartos');
            $table->foreign('cod_hospede')->references('idhospede')->on('hospedes');
            $table->foreign('cod_user')->references('iduser')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
