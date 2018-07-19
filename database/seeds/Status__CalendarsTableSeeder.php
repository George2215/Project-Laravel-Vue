<?php

use Illuminate\Database\Seeder;
use App\Status_Calendar;

class Status__CalendarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('status__calendars')->insert(array(    		
	        'nombre' => 'Pendiente'		
    	));      
    }
}
