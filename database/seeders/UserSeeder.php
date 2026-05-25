<?php

namespace Database\Seeders;

use App\models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userData = [
            [
                'name'=>'Mas Admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345'),
                'role'=>'admin'
            ],
            [
                'name'=>'Mas Operator',
                'email'=>'operator@gmail.com',
                'password'=>bcrypt('12345'),
                'role'=>'operator'
            ]
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }    

    }
}
