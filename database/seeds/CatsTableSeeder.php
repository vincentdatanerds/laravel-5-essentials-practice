<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CatsTableSeeder extends Seeder {
	public function run() {
		DB::table('cats') -> insert([
			['id' => 1, 'name' => 'Alpha', 'breed_id' => 1],
			['id' => 2, 'name' => 'Bob', 'breed_id' => 1],
			['id' => 3, 'name' => 'Charles', 'breed_id' => 4],
			['id' => 4, 'name' => 'Delta', 'breed_id' => 4],
		]);
	}
}