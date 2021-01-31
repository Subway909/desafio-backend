<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'email' => 'henzo.gomes@gmail.com',
            'name' => 'Henzo Gomes',
            'cpf' => '123.456.789-09',
            'password' => Hash::make('123')
        ]);
    }
}
