<?php

abstract class Acmeseeder extends Seeder {

	public function run() {
		if(!isset($this->table)) {
			throw new Exeption('no table!')
		}


		if(method_exists(get_class(), 'getData')) {
			throw new Exeption('no data!')
		}


		DB::table($this->table)->truncate();
		DB::table($this->table)->insert($this->getData());


	}
}