<form method="POST" v-on:submit.prevent="createEmployee">
	<div class="modal fade" id="create">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
					<h4 class="modal-title">Crear Empleado</h4>
				</div>
				<div class="modal-body col-md-12">
					<div class="col-md-6">			
						<label for="identificacion">Identificación</label>				
							<input type="text" name="identificacion" class="form-control" v-model="identificacion">			
						<label for="primer_nombre">Primer Nombre</label>
							<input type="text" name="primer_nombre" class="form-control" v-model="primer_nombre">
						<label for="segundo_nombre">Segundo Nombre</label>
							<input type="text" name="segundo_nombre" class="form-control" v-model="segundo_nombre">
						<label for="primer_apellido">Primer Apellido</label>
							<input type="text" name="primer_apellido" class="form-control" v-model="primer_apellido">
						<label for="segundo_apellido">Segundo Apellido</label>					
							<input type="text" name="segundo_apellido" class="form-control" v-model="segundo_apellido">
					</div>
					<div class="col-md-6">
						<label for="fecha_nacimiento">Fecha Nacimiento</label>						
							<input type="date" name="fecha_nacimiento" class="form-control" v-model="fecha_nacimiento">
						<label for="telefono">Teléfono / Celular</label>
							<input type="text" name="telefono" class="form-control" v-model="telefono" >
						<label for="usuario">Usuario</label>						
							<input type="text" name="usuario" class="form-control" v-model="usuario">	
						<label for="password">Password</label>						
							<input type="password" name="password" class="form-control" v-model="password">
						<label for="rol_id">Rol</label>	
						<select class="form-control" name="rol_id" v-model=rol_id>
                        	<option v-for="role in roles" v-bind:value="role.rol_id" v-text="role.nombre"></option>
                        </select>
                     </div>
                     <ul>
                     	<li class="text-center" style="list-style: none">
                     		<div v-for="error in errors" class="text-danger">@{{ error }}</div>
                     	</li>
                     </ul>
					
				</div>										
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>				
					<input type="submit" class="btn btn-primary" value="Guardar">					
				</div>						
			</div>
		</div>
	</div>
</form>