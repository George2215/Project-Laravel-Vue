//var urlEmployees='https://jsonplaceholder.typicode.com/users';

new Vue({
	el: '#crud',
	created: function () {
		this.getEmployees();
		this.getRoles();		
	},
	data:{
		employees: [],	//Array empleados	
		roles: [], //Array Roles
		//Datos del formulario		
		identificacion: '', 
		primer_nombre: '',
		segundo_nombre: '',
	    primer_apellido: '',
	    segundo_apellido: '',
	    fecha_nacimiento: '',
	    telefono: '',
	    usuario:'',
	    password:'',
	    rol_id:0,
		fillEmployee: {'empleado_id': '',
				   'identificacion': '',
				   'primer_nombre': '',
				   'segundo_nombre': '',
				   'primer_apellido': '',
				   'segundo_apellido': '',
				   'fecha_nacimiento': '',
				   'telefono': '',
				   'usuario': '',
				   'password': '',
				   'rol_id': ''
					},
		name:'',
		errors: [],
		message:[]
	},
	methods: {
		getEmployees: function() {
			var urlEmployees = 'employee';
			axios.get(urlEmployees).then(response => {
				this.employees = response.data
			});
		},
		getRoles: function() {
			var urlRoles = 'role';
			axios.get(urlRoles).then(response => {
				this.roles = response.data
			});
		},
		deleteEmployee: function(employee) {
			//alert(employee.empleado_id);
			var url = 'employee/' + employee.empleado_id;
			axios.delete(url).then(response => { //se elimina el registro
				this.getEmployees();//permite refrescar los elementos, lista nuevamente
				toastr.success('Eliminado correctamente');//se envia el mensaje
			});
		},
		createEmployee:function(){			
			var url = 'employee';
			axios.post(url,{'identificacion':this.identificacion,
							'primer_nombre':this.primer_nombre,
							'segundo_nombre':this.segundo_nombre,
							'primer_apellido':this.primer_apellido,
							'segundo_apellido':this.segundo_apellido,
							'fecha_nacimiento':this.fecha_nacimiento,
							'telefono':this.telefono,
							'usuario':this.usuario,
							'password':this.password,
							'rol_id':this.rol_id}).then(response=>{
									//console.log(response.data);
									this.getEmployees();
									this.identificacion= '',
									this.primer_nombre= '',
									this.segundo_nombre= '',
									this.primer_apellido= '',
									this.segundo_apellido= '',
									this.fecha_nacimiento= '',
									this.telefono= '',
									this.usuario= '',
									this.password= '',
									this.rol_id= 0;				
									this.errors = [];
									$('#create').modal('hide');								
									if(response.data.message==true) {
										toastr.success("El empleado se registro con éxito");
									}
									else{
										toastr.warning("El empleado ya se encuentra registrado");	
									}
							//toastr.success(response.data.message);																					
							}).catch(error =>{//Captura los errores
									this.errors = error.response.data.errors
								});			
		},
		editEmployee: function(employee){
			//alert(employee.usuario);
			this.fillEmployee.empleado_id   = employee.empleado_id;
			this.fillEmployee.identificacion = employee.identificacion;
			this.fillEmployee.primer_nombre = employee.primer_nombre;
			this.fillEmployee.segundo_nombre = employee.segundo_nombre;
			this.fillEmployee.primer_apellido = employee.primer_apellido;
			this.fillEmployee.segundo_apellido = employee.segundo_apellido;
			this.fillEmployee.fecha_nacimiento = employee.fecha_nacimiento;
			this.fillEmployee.telefono = employee.telefono;
			this.fillEmployee.usuario = employee.usuario;
			this.fillEmployee.password = employee.password;
			this.fillEmployee.rol_id = employee.rol_id;
			$('#edit').modal('show');//muestra el formulario*/
		},
		updateEmployee: function(empleado_id){
			var url = 'employee/' + empleado_id;								
			axios.put(url, this.fillEmployee).then(response=>{
				this.getEmployees();
				this.fillEmployee= {'empleado_id': '',
				   'identificacion': '',
				   'primer_nombre': '',
				   'segundo_nombre': '',
				   'primer_apellido': '',
				   'segundo_apellido': '',
				   'fecha_nacimiento': '',
				   'telefono': '',
				   'usuario': '',
				   'password': '',
				   'rol_id': ''
					};
				this.errors = [];
				$('#edit').modal('hide');
				if(response.data.message==true) {
					toastr.success("El empleado se actualizó correctamente");
				}
				else{
					toastr.warning("El empleado ya se encuentra registrado");	
				}
				//toastr.success('Empleado actualizado correctamente');
			}).catch(error=>{
				this.errors = error.response.data
			});
		}	
	},
	computed: {
		searchEmployee: function (){
			return this.employees.filter((item) => item.primer_nombre.includes(this.name));
		}
	}
});