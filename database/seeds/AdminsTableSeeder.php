<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $users = [
		    [
			    'name' => 'Simon Njenga',
			    'phoneNumber' => '0706256130',
			    'email' => 'makuno.biz@gmail.com',
			    'password' => \Illuminate\Support\Facades\Hash::make('0706256130'),
			    'created_at' => \Illuminate\Support\Carbon::now(),
			    'updated_at' => \Illuminate\Support\Carbon::now(),
		    ],
	    ];

	    \Illuminate\Support\Facades\DB::table('admins')->insert($users);

    }
}
