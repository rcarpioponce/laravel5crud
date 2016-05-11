<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	Job::create(['name'=>'Ingeniero']);
     	Job::create(['name'=>'Abogado']);
     	Job::create(['name'=>'Arquitecto']);
    }
}
