function validateForm() {
console.log("Entro");
//Declaracion de variables
	 var nombre = document.getElementById("Nombre");

     var apellido = document.getElementById("Apellido");  

     var cedula = document.getElementById("Cedula");

     var telefono = document.getElementById("Telefono");

     var correo = document.getElementById("Correo"); 

  
    // No se puede dejar espacios vacios
    if(nombre.value=="" ||  apellido.value=="" || cedula.value=="" ||  telefono.value=="" ||  
		correo.value==""  ){

        alert("Por favor introduzca sus datos completos");
    	 } else{ //Expresiones regulares
				for (i = 0 ; i < 1; i++){

					if(/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/.test(nombre.value)){

					nombre.push;

					}else{

					alert("Tiene valores numericos, especiales ... Por favor vuelve a ingresar al nombre");
				i = i+1;
				}	
		} 
				for (i = 0 ; i < 1; i++){

					if(/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/.test(apellido.value)){

					apellido.push;

					}else{

					alert("Tiene valores numericos, especiales ... Por favor vuelve a ingresar al apellido");
				i = i+1;
				}	
		} 
				for (i = 0 ; i < 1; i++){

					if(/^\d+$/.test(cedula.value)){

					cedula.push;

					}else{

					alert("Tiene valores alfabeticos ... Por favor vuelve a ingresar la cedula");
				i = i+1;
				}	
			}
				for (i = 0 ; i < 1; i++){

					if(/^([0-9]{4})+(-)+([0-9]{7})$/i.test(telefono.value)){

					telefono.push;

					}else{
					alert("Tiene valores alfabeticos o ingreso un numero no valido recuerde escribir el guion, ejemplo: 0416-9876543... Por favor vuelve a ingresar el telefono");
				i = i+1;
				}	
		 }

				for (i = 0 ; i < 1; i++){

					if(/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/i.test(correo.value)){

/*					correo.push;
			    var service_id = 'gmails_cfn';
				var template_id = 'hola_cfn';
				var template_params = {
				name: nombre.value,
				reply_email: correo.value,
				message: 'Hola, nos diste tu correo'
				};
				  emailjs.send(service_id,template_id,template_params);
*/
				   $.ajax({
						  url: "recibe",
						  method: "POST",
						  data: { 
						  	varNombre : nombre, 
						  	varApellido : apellido, 
						  	varCedula : cedula,
							varTelefono:telefono, 
						 	varCorreo:correo 
						 },
						 success : function(json) {
					       	alert(json);
					    }					
					});
					 
					

					}else{

					alert("Tiene valores alfabeticos o ... Por favor vuelve a ingresar el correo");
				i = i+1;
					}
  // Change to your service ID, or keep using the default service

}}}