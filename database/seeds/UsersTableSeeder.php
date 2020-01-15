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
	    $users = [
		    [
			    'name' => 'Simon Njenga',
			    'phone_number' => '0706256130',
			    'pin' => \Illuminate\Support\Facades\Hash::make('2020'),
			    'created_at' => \Illuminate\Support\Carbon::now(),
			    'updated_at' => \Illuminate\Support\Carbon::now(),
		    ],
	    ];

	    \Illuminate\Support\Facades\DB::table('users')->insert($users);

	    (new \App\Http\Controllers\HomeController())->createStatements(1,1,10000,"Test funds");
    }
}
