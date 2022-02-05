<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        User::create([
            'name'=> 'Pamela Montes de oca',
            'email'=> 'bombopelot@gmail.com',
            'password'=> '1234567890'
        ]);

    }
}
