<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Employee;
use App\Role;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*$employees = Employee::get();

        return $employees;*/        

        $employees = DB::table('employees')
            ->join('roles', 'employees.rol_id', '=', 'roles.rol_id')            
            ->select('employees.id',
                     'employees.identificacion',
                     'employees.primer_nombre',
                     'employees.segundo_nombre',
                     'employees.primer_apellido',
                     'employees.segundo_apellido',
                     'employees.fecha_nacimiento',
                     'employees.telefono',
                     'employees.usuario',
                     'employees.password',
                     'roles.rol_id', 
                     'roles.nombre as rol')
            ->orderBy('id', 'desc')
            ->get();

         return $employees;
    }
    
    public function store(EmployeeStoreRequest $request)
    {
        /*$this->validate($request, [
                'identificacion'    => 'required',
                'primer_nombre'     => 'required',
                'primer_apellido'   => 'required',
                'fecha_nacimiento'  => 'required',
                'telefono'          => 'required',
                'usuario'           => 'required',
                'password'          => 'required',
                'rol_id'            => 'required'
        ]);*/

        $identificacion = $request->get('identificacion');
            
        $record = Employee::firstOrNew(['identificacion' => $identificacion]);
            
            if($record->exists) {
                //"El Empleado ya se encuentra registrado"; 
                return ['message' => false];               
            } else {
                $record->fill($request->all());
                $record->save();
                //$message = "El Empleado se registro con éxito"; 
                return ['message' => true];
                }
            
        //return compact('message');  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequest $request, $id)
    {        

               DB::table('employees')
                ->where('id', $id)
                   
                ->update($request->all());

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = DB::table('employees')->where('empleado_id', '=', $id)->delete();        
    }

    public function rol()
    {
        $roles = Role::get();

        return $roles;
    }
}
