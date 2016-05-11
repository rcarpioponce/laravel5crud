<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            User::create([ //,
		        'name' => $faker->name,
		        'email' => $faker->safeEmail,
		        'job_id' => $faker->randomElement([1,2,3]),
		        'password' => bcrypt('123456'),
		        'remember_token' => str_random(10),
            ]);
        }


    }
}
