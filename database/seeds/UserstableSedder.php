<?php

use Illuminate\Database\Seeder;

class UserstableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([

        	'name' => ' admin',
        	'email' => 'sohail@gmail.com',
        	'password' => bcrypt('admin'),
        	'admin' => 1,
        	'avator' => asset('avators/avator.jpeg')


        ]);
        App\User::create([

        	'name' => ' admin',
        	'email' => 'khan@gmail.com',
        	'password' => bcrypt('admin'),
        	'admin' => 0,
        	'avator' => asset('avators/avator.jpeg')

        ]);
    }
}
