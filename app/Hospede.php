<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'datanasc', 'profissao', 'nacionalidade', 'sexo', 'numdoc',
        'tipodoc', 'org', 'endereco', 'cep', 'cidade', 'estado', 'pais',
        'ultdestino', 'proxdestino', 'motivo', 'transporte', 'email', 'usuario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'nome', 'datanasc', 'profissao', 'nacionalidade', 'sexo', 'numdoc',
        'tipodoc', 'org', 'endereco', 'cep', 'cidade', 'estado', 'pais',
        'ultdestino', 'proxdestino', 'motivo', 'transporte', 'email', 'usuario'
    ];
}
