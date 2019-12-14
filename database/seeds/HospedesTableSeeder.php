<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospedes =[
            [
                'nome' => 'Luan da Cunha',
                'datanasc' => '1999-01-15',
                'profissao' => 'Estudante',
                'nacionalidade' => 'Brasileiro',
                'sexo' => 'M',
                'numdoc' => '12825229652',
                'tipodoc' => 'CPF',
                'org' => 'SSP',
                'endereco' => 'Rua Felisberto Mendes',
                'cep' => '39520000',
                'cidade' => 'Porteirinha',
                'estado' => 'Minas Gerais',
                'pais' => 'Brasil',
                'ultdestino' => 'Salvador',
                'proxdestino' => 'São Paulo',
                'motivo' => 'Férias',
                'transporte' => 'Avião',
                'email' => 'luanport15@gmail.com',
                'usuario' => '2',
            ],
            [
                'nome' => 'Victor Gabriel',
                'datanasc' => '1998-07-08',
                'profissao' => 'Estudante',
                'nacionalidade' => 'Brasileiro',
                'sexo' => 'M',
                'numdoc' => '01974867625',
                'tipodoc' => 'CPF',
                'org' => 'SSP',
                'endereco' => 'Rua Maceió 238',
                'cep' => '3940266',
                'cidade' => 'Montes Claros',
                'estado' => 'Minas Gerais',
                'pais' => 'Brasil',
                'ultdestino' => 'Belo Horizonte',
                'proxdestino' => 'Montes Claros',
                'motivo' => 'Férias',
                'transporte' => 'Avião',
                'email' => 'victor@victor',
                'usuario' => '3',
            ],
            [
                'nome' => 'Mateus Soares',
                'datanasc' => '1995-07-19',
                'profissao' => 'Contador',
                'nacionalidade' => 'Brasileiro',
                'sexo' => 'M',
                'numdoc' => '123456789',
                'tipodoc' => 'RG',
                'org' => 'SSP',
                'endereco' => 'Rua Tupi 399',
                'cep' => '39402190',
                'cidade' => 'Montes Claros',
                'estado' => 'Minas Gerais',
                'pais' => 'Brasil',
                'ultdestino' => 'Londres',
                'proxdestino' => 'Montes Claros',
                'motivo' => 'Negócios',
                'transporte' => 'Avião',
                'email' => 'matues@mateus',
                'usuario' => '4',
            ],
            [
                'nome' => 'Lucas Oliveira',
                'datanasc' => '1989-02-11',
                'profissao' => 'Empresário',
                'nacionalidade' => 'Brasileiro',
                'sexo' => 'M',
                'numdoc' => '212345678',
                'tipodoc' => 'RG',
                'org' => 'SSP',
                'endereco' => 'Av das Palmeiras 399',
                'cep' => '39400132',
                'cidade' => 'Montes Claros',
                'estado' => 'Minas Gerais',
                'pais' => 'Brasil',
                'ultdestino' => 'Montes Claros',
                'proxdestino' => 'Montes Claros',
                'motivo' => 'Férias',
                'transporte' => 'Carro',
                'email' => 'lucas@lucas',
                'usuario' => '5',
            ],
            [
                'nome' => 'Dayane Silva',
                'datanasc' => '1996-12-11',
                'profissao' => 'Analista de Sistemas',
                'nacionalidade' => 'Brasileiro',
                'sexo' => 'M',
                'numdoc' => '192111223',
                'tipodoc' => 'RG',
                'org' => 'SSP',
                'endereco' => 'Rua Santa Maria 1099',
                'cep' => '39400115',
                'cidade' => 'Montes Claros',
                'estado' => 'Minas Gerais',
                'pais' => 'Brasil',
                'ultdestino' => 'Montes Claros',
                'proxdestino' => 'Salvador',
                'motivo' => 'Férias',
                'transporte' => 'Carro',
                'email' => 'dayane@dayane',
                'usuario' => '6',
            ]
        ];

        DB::table('hospedes')->insert($hospedes);
    }
}
