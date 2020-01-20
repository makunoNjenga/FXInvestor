<?php

use App\Http\Controllers\HomeController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'password' => Hash::make('2020'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);

        (new HomeController())->createStatements(1, 1, 0, "Test funds");
        (new HomeController())->createStatements(2, 1, 0, "Test funds");
        (new HomeController())->createStatements(3, 1, 0, "Test funds");
    }
}
