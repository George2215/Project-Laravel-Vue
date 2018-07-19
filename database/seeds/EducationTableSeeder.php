<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Education;

class EducationTableSeeder extends Seeder
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

    	\DB::table('education')->insert(array(    		
	        'nombre' => $faker->word			
    	));
    	}
    }
}
