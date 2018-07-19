<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Marital_Status;

class Marital__StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();

    	for($i=0;$i<5;$i++){
       // factory(Patient::class, 5)->create();

    	\DB::table('marital__statuses')->insert(array(    		
	        'nombre' => $faker->word			
    	));
    	}
    }
}
