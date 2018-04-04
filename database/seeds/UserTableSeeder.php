<?php


class UserTableSeeder extends Acmeseeder {

	protected $table = 'users';

	public function getData(){

		return [

			['name' => 'Hehe', 'email' => 'hehe@example.com', 'password' => Hash::make('password')]

		];
	}

	

}