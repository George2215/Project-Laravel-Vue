<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Role;
use App\Employee;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();

    	
       // factory(Patient::class, 5)->create();
        for($i=0;$i<3;$i++){

    	$id=\DB::table('roles')->insertGetId(array(    		
	        'nombre' => $faker->word			
    	));       	
            for($x=0;$x<30;$x++){
            \DB::table('employees')->insert(array(
                'identificacion' =>$faker->postcode,
                'primer_nombre' =>$faker->firstNameFemale,
                'segundo_nombre'=>$faker->firstNameFemale,
                'primer_apellido'=>$faker->lastName,
                'segundo_apellido'=>$faker->lastName,
                'fecha_nacimiento'=>$faker->date,
                'telefono'=>$faker->numberBetween($min = 1000, $max = 9000),
                'usuario'=>$faker->userName,
                'password'=>$faker->md5,
                'rol_id'=>$id            
            ));
            }            
        }   
    }
}
