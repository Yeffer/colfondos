	$(document).ready(function(){
		
		$("#registro").click(function(e){
			e.preventDefault();
			var nombre = $("#nombre").val();
			var telefono = $("#telefono").val();
			
			if(nombre !=="" && telefono !==""){
				$.ajax({
					url : "../controller/accion.php",
					type: "POST",
					cache: false,
					data : {nombre:nombre,telefono:telefono},
					success:function(data){
						alert("Datos registrados correctamente");
						$("#clienteForm")[0].reset();
						loadTableData();
					},
				});
			}else{
				alert("Todos los campos son obligatorios");
			}
		});		
	});
