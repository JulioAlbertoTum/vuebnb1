<?php

use Illuminate\Database\Seeder;
use App\User;
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
        User::create([
        	'name' => 'jesus',
        	'email' => 'jesus@gmail.com',
        	'password' => Hash::make('jesus'),
        	'saved' => '[1,5,7,9]'
        ]);
    }
}
