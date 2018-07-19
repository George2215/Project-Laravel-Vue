<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	//$roles =App\Role::all();
    return view('employee.dashboard');
    //return view('web.index');
});


Route::resource('employee', 'EmployeeController', ['except' => 'show', 'create', 'edit']);
Route::resource('patient', 'PatientController', ['except' => 'show', 'create', 'edit']);
Route::get('role','EmployeeController@rol');
//Route::resource('role', 'RoleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
