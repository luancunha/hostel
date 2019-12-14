<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
                'name' => 'Admin',
                'email' => 'admin@material.com',
                'password' => Hash::make('secret'),
                'tipo' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Luan da Cunha',
                'email' => 'luanport15@gmail.com',
                'password' => Hash::make('123456'),
                'tipo' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Victor',
                'email' => 'victor@victor',
                'password' => Hash::make('123456'),
                'tipo' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mateus',
                'email' => 'mateus@mateus',
                'password' => Hash::make('123456'),
                'tipo' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lucas',
                'email' => 'lucas@lucas',
                'password' => Hash::make('123456'),
                'tipo' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dayane',
                'email' => 'dayane@dayane',
                'password' => Hash::make('123456'),
                'tipo' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('users')->insert($users);
    }
}
