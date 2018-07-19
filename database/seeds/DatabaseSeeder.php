<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(PatientsTableSeeder::class);
    	$this->call(EducationTableSeeder::class);
    	$this->call(Kind__IdsTableSeeder::class);
    	$this->call(RolesTableSeeder::class);
        $this->call(Marital__StatusesTableSeeder::class);
        $this->call(Status__CalendarsTableSeeder::class);
    }
}
