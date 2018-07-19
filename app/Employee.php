<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable =['identificacion',
    					  'primer_nombre',
						  'segundo_nombre',
						  'primer_apellido',
						  'segundo_apellido',
						  'fecha_nacimiento',
						  'telefono',
						  'celular',
						  'usuario',
						  'password',
						  'rol_id'
						 ];
}
