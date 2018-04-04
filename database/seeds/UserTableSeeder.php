<?php

class UserTableSeeder extends AcmeSeeder {

	protected $table = 'users';

	public function getData(){

		return [

			['name' => 'Hehe', 'email' => 'hehe@example.com', 'password' => Hash::make('password'), 'role' => 'admin']

		];
	}
}