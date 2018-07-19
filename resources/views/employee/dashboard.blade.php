@extends('layouts.app')

@section('content')

<div id="crud" class="row">
	<div class="col-xs-12">
		<h1 class="page-header">Panel Empleados</h1>	
	</div>
	<div class="col-sm-7">

		<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Nuevo empleado</a>	
		<div class="col-sm-7">
		<input type="text" placeholder="Buscar por nombre de empleado" class="form-control" v-model="name"></input>
		</div>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Identificación</th>
					<th class="text-center">Nombre Empleado</th>
					<th class="text-center">Teléfono</th>
					<th class="text-center">Rol</th>
					<th colspan="2"> &nbsp;</th>
				</tr>			
			</thead>
			<tbody>
				<tr class="text-center" v-for="employee in searchEmployee">
					<td width="10px">@{{ employee.id }} </td>
					<td>@{{ employee.identificacion }} </td>
					<td>@{{ employee.primer_nombre }} @{{ employee.segundo_nombre }} @{{ employee.primer_apellido }} @{{ employee.segundo_apellido }} </td>
					<td>@{{ employee.telefono }} </td>
					<td>@{{ employee.rol }} </td>
					<td width="10px">
						<a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editEmployee(employee)">Editar</a>
					</td>
					<td width="10px">
						<a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteEmployee(employee)">Eliminar</a>
					</td>	
				</tr>			
			</tbody>
		</table>
		@include('employee.create')
		@include('employee.edit')
	</div>
	<!--<div class="col-sm-5">
		<pre>
			@{{ $data }}
		</pre>
	</div>-->
</div>

@endsection