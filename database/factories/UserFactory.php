<?php

use Faker\Generator as Faker;



/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Patient::class, function (Faker $faker) {
    
    return [
    	'identificacion'=>$faker->,
        'primer_nombre' => $faker->name,
		'segundo_nombre' => $faker->name,
		'primer_apellido' => $faker->last_name,
		'segundo_apellido' =>$faker->last_name,
		'sexo'=>$faker->m,
		'direccion_domicilio'=>$faker->address,
		'telefono'=>$faker->phoneNumber,
		'celular'=>$faker->phoneNumber,
		'fecha_nacimiento'=>$faker->date
    ];
});
