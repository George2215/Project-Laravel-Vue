@extends('layouts.app')

@section('content')

<div id="cruduser" class="row">
	<div class="col-xs-12">
		<h1 class="page-header">Panel Pacientes</h1>	
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
				<tr class="text-center" v-for="patient in searchPatient">
					<td width="10px">@{{ patient.paciente_id }} </td>
					<td>@{{ patient.identificacion }} </td>
					<td>@{{ patient.primer_nombre }} @{{ patient.segundo_nombre }} @{{ patient.primer_apellido }} @{{ patient.segundo_apellido }} </td>
					<td>@{{ patient.telefono }} </td>
					<td>@{{ patient.rol }} </td>
					<td width="10px">
						<a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editEmployee(patient)">Editar</a>
					</td>
					<td width="10px">
						<a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteEmployee(patient)">Eliminar</a>
					</td>	
				</tr>			
			</tbody>
		</table>
		@include('employee.create')
		@include('employee.edit')
	</div>
	<div class="col-sm-5">
		<pre>
			@{{ $data }}
		</pre>
	</div>
</div>

@endsection