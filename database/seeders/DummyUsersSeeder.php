<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
            'name'=>'admin1',
            'email'=>'admin1@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt('AkulahSangAdmin1')
            ],
            [
                'name'=>'siswa1',
                'email'=>'siswa1@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('AkulahSiswaNomer1')
            ]
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
