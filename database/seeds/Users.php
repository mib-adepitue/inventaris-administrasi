<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	        'name'  => "Khaeruddin Asdar",
	        'email' => 'khaeruddinasdar12@gmail.com',
	        'password'  => bcrypt('12345678'),
	        'jabatan' => 'kord_iptek',
	        'phone' => '0823449494505'
		]);
    }
}
