<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qntp', 'id_quarto', 'data_e', 'data_s', 'data_hora', 'cod_hospede', 'cod_user', 'pag', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'qntp', 'id_quarto', 'data_e', 'data_s', 'data_hora', 'cod_hospede', 'cod_user', 'pag', 'status',
    ];
}
