<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuartosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quartos =[
            [
                'codquarto' => 'C01',
                'camas_o' => '0',
                'max_camas' => '13',
                'valor' => '100.00',
                'tipo' => '1',
            ],
            [
                'codquarto' => 'C02',
                'camas_o' => '0',
                'max_camas' => '10',
                'valor' => '120.00',
                'tipo' => '1',
            ],
            [
                'codquarto' => 'C03',
                'camas_o' => '0',
                'max_camas' => '9',
                'valor' => '90.00',
                'tipo' => '1',
            ],
            [
                'codquarto' => 'S01',
                'camas_o' => '0',
                'max_camas' => '1',
                'valor' => '250.00',
                'tipo' => '2',
            ],
            [
                'codquarto' => 'S02',
                'camas_o' => '0',
                'max_camas' => '1',
                'valor' => '200.00',
                'tipo' => '2',
            ]
        ];

        DB::table('quartos')->insert($quartos);
    }
}
