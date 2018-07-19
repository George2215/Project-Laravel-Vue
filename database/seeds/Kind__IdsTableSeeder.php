<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Kind_Id;

class Kind__IdsTableSeeder extends Seeder
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

    	\DB::table('kind__ids')->insert(array(    		
	        'nombre' => $faker->word			
    	));
    	}
    }
}
