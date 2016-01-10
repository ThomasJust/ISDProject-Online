<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
	//Creates a dummy user for testing
        DB::table('users')->insert([
        	'first_name' => Elvist,
		'last_name' => Presly,
        	'email' => 'theking.@gmail.com',
        	'password' => bcrypt('secret'),			
		'remember_token' => str_random(10),
			 ]);
    }
}
