<form method="POST" v-on:submit.prevent="updateEmployee(fillEmployee.empleado_id)">	
	<div class="modal fade" id="edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
					<h4>Editar Empleado</h4>
				</div>
				<div class="modal-body col-md-12">
					<div class="col-md-6">
						<label for="identificacion">Identificación</label>				
							<input type="text" name="identificacion" class="form-control" v-model="fillEmployee.identificacion">	
						<label for="primer_nombre">Primer Nombre</label>
							<input type="text" name="primer_nombre" class="form-control" v-model="fillEmployee.primer_nombre">
						<label for="segundo_nombre">Segundo Nombre</label>
							<input type="text" name="segundo_nombre" class="form-control" v-model="fillEmployee.segundo_nombre">
						<label for="primer_apellido">Primer Apellido</label>
							<input type="text" name="primer_apellido" class="form-control" v-model="fillEmployee.primer_apellido">
						<label for="segundo_apellido">Segundo Apellido</label>					
							<input type="text" name="segundo_apellido" class="form-control" v-model="fillEmployee.segundo_apellido">
					</div>
					<div class="col-md-6">
						<label for="fecha_nacimiento">Fecha Nacimiento</label>						
							<input type="text" name="fecha_nacimiento" class="form-control" v-model="fillEmployee.fecha_nacimiento">
						<label for="telefono">Teléfono / Celular</label>
							<input type="text" name="telefono" class="form-control" v-model="fillEmployee.telefono" >
						<label for="usuario">Usuario</label>						
							<input type="text" name="usuario" class="form-control" v-model="fillEmployee.usuario">	
						<label for="password">Password</label>						
							<input type="password" name="password" class="form-control" v-model="fillEmployee.password">
						<label for="rol_id">Rol</label>	
						<select class="form-control" name="rol_id" v-model=fillEmployee.rol_id>
                        	<option v-for="role in roles" v-bind:value="role.rol_id" v-text="role.nombre"></option>
                        </select>
                    </div>
					<span v-for="error in errors" class="text-danger">@{{ error }}</span>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Actualizar">					
				</div>						
			</div>
		</div>
	</div>
</form>