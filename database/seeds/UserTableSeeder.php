<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		\DB::Table('users')->insert(array(

			'first_name'	=>'Alvaro',
			'last_name'		=>'Sacari Alanoca',
			'email'			=>'alvaro.sacari@gmail.com',
			'password'		=>\Hash::make('123456'),
			'type'			=>'admin'
		));
	}
}
