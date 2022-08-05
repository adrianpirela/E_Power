// funciones.js


// funcion confirmar
	function funconfirmar()
	{
		confirm ( "Mensaje de confirmaci�n al Usuario usando Javascript" );
	}

	
// funcion para el if-else
	function funifelse()
	{
		var resp = confirm ( "Acepta los t�rminos y condiciones" );
		if ( resp == true )
		{
			alert ("T�rminos y condiciones aceptados");
		}else
		{
			alert ("T�rminos y condiciones NO aceptados");
		}
	}

	
// funcion para el switch
	function funswitch()
	{
		var resp = prompt( "M�dulo que cursa actualmente en el diplomado", "1" );
		switch ( resp )
		{
			case '1':
				alert ("Su M�dulo es HTML y CSS");
			break;
			case '2':
				alert ("Su M�dulo es Javascript y JQuery");
			break;
			case '3':
				alert ("Su M�dulo es XML y AJAX");
			break;
			case '4':
				alert ("Su M�dulo es BASE DE DATOS");
			break;
			default:
				alert ("El M�dulo "+resp+" No pertenece a Webmaster");
		}
	}

	
// funcion para el for
	function funfor()
	{
		var inicio = prompt("Ingrese el n�mero para iniciar el conteo");
		// Conversi�n a N�merico
		inicio= Number(inicio);
		var fin = prompt("Ingrese el n�mero donde finalizar el conteo");
		// Conversi�n a N�merico
		fin = Number(fin);
		if ( inicio < fin )
		{
			for ( var i= inicio ; i<= fin ; i++ )
			{
				alert ("N�mero : "+ i);
			}
		}
		else
		{
			if ( inicio > fin )
			{
				for ( var i= inicio ; i>= fin ; i-- )
				{
					alert ("N�mero : "+ i);
				}
			}
			else
			{
				alert ("Los n�meros son iguales, no hay conteo.");
			}
		}
	}
	

// funcion para el while
	function funwhile()
	{
		var num = prompt("Ingrese el n�mero entre 0-50");
		// Conversi�n a N�merico
		num= Number(num);
		/*	if ( num < 0 || num > 50 )
			{
				alert ("N�mero fuera del rango 0-50");
			}
			else
			{ */
				while ( num < 50 )
				{
					num++;
					alert ("N�mero : "+ num);
				}
			//}
	}
	

// funcion para el while
	function fundowhile()
	{
		do
		{
			var resp = confirm ( "Acepta los t�rminos y condiciones" );
			if ( resp == true )
			{
				alert ("T�rminos y condiciones aceptados");
			}else
			{
				alert ("T�rminos y condiciones NO aceptados");
			}
		}while( resp == false);
	}
	

	
// Objeto Datos
	var ObjDatos = {
		id : 1,
		nombre : '',
		apellido : '',
		
		mostrarnombre : function(){
			alert( 'Nombre: '+ this.nombre );
		} ,
		
		mostrardatos : function(){
			alert( 'Identificacion: '+ this.id +'\nNombre: ' + this.nombre + '\nApellido: ' + this.apellido );
		}
	}
	
// Nuevo Objeto Empleado
	var ObjEmpleado = Object.create(ObjDatos);
	ObjEmpleado.nombre = '';
	//ObjEmpleado.id = '';
	//ObjEmpleado.apellido = '';
	
// Nuevo Objeto Cliente
	var ObjCliente = Object.create(ObjDatos);
	ObjCliente.id = '';
	ObjCliente.nombre = '';
	ObjCliente.apellido = '';
	
// Funci�n al cargar
	function funalcargar()
	{
		alert ("\nFormulario con Javascript");	
	}

// Funci�n MouseOver
	function funmouseover(parametro) {
		parametro.innerHTML = "Mouse Sobre el Titulo del Formulario";
		parametro.style.backgroundColor = "#3333FF";
		parametro.style.color = "#FFF";
	}

// Funci�n MouseOut
	function funmouseout(parametro) {
		parametro.innerHTML = "Llenar los datos del formulario";
		parametro.style.backgroundColor = "#B7D0EB";
		parametro.style.color = "#000";
	}
	
// Funci�n Click en Titulo
	function funclicktitulo()
	{
		alert("Click sobre el Titulo del Formulario");
		
	}
	
// Funci�n Focus
	function funfocus()
	{
		alert("Ingresa ac� el nombre");
	}

// Funci�n Focus
	function funtecla()
	{
		alert("Presionaste una tecla");
	}

	
// Funci�n para Validar el formulario
	function validarform()
	{
	
		var error = 0 ;
		
		// validar nombre
		var errorNom = document.getElementById('errorNom');

		var nombre = document.form1.nombre_re;
		if( nombre.value === '' )
		{
			errorNom.style.visibility = 'visible';
			nombre.style.background = '#B7D0EB';
			error = 1;
		}
		else
		{
			errorNom.style.visibility = 'hidden';
				// validar nombre
				var re = /^[a-z]*$/i;
				if ( !re.test(form1.nombre_re.value) )
				{
					alert ( 'Nombre No Valido' );
					nombre.style.background = '#B7D0EB';
					form1.nombre_re.focus();
					error = 1;					
				}
	
		}

// validar apellido
				var errorApe = document.getElementById('errorApe');

		var apellido = document.form1.apellido_re;
		if( apellido.value === '' )
		{
			errorApe.style.visibility = 'visible';
			apellido.style.background = '#B7D0EB';
			error = 1;
		}
		else
		{
			errorApe.style.visibility = 'hidden';
				
				var re = /^[a-z]*$/i;
				if ( !re.test(form1.apellido_re.value) )
				{
					alert ( 'apellido NO valido' );
					apellido.style.background = '#B7D0EB';
					form1.apellido_re.focus();
					error = 1;					
				}
		
		}

			// validar codigo
		var estado = document.getElementById('errorEst');

		var estado = document.form1.codigo_re;
		if( estado.value === '' )
		{
			errorEst.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorEst.style.visibility = 'hidden';
		}


		//validar numero

					var errortel = document.getElementById('errortel');

		var Telefono = document.form1.telefono_re;
		if( Telefono.value === '' )
		{
			errortel.style.visibility = 'visible';
			Telefono.style.background = '#B7D0EB';
			error = 1;
		}
		else
		{
			errortel.style.visibility = 'hidden';
				// validar nombre
				var re = /^[0-9]*$/i;
				if ( !re.test(form1.telefono_re.value) )
				{
					alert ( 'Telefono NO valido' );
					Telefono.style.background = '#B7D0EB';
					form1.telefono_re.focus();
					error = 1;					
				}
		
		}

					// validar tipo doc
		var docmento = document.getElementById('errordoc');

		var docmento = document.form1.tip_doc;
		if( docmento.value === '' )
		{
			errordoc.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errordoc.style.visibility = 'hidden';
		}


		//validar docmento

		var errorNdoc = document.getElementById('errorNdoc');

		var Documento = document.form1.num_doc;
		if( Documento.value === '' )
		{
			errorNdoc.style.visibility = 'visible';
			Documento.style.background = '#B7D0EB';
			error = 1;
		}
		else
		{
			errorNdoc.style.visibility = 'hidden';
				// validar nombre
				var re = /^[0-9]*$/i;
				if ( !re.test(form1.num_doc.value) )
				{
					alert ( 'Documento NO valido' );
					Documento.style.background = '#B7D0EB';
					form1.num_doc.focus();
					error = 1;					
				}
		
		}

							// validar direccion
		var docmento = document.getElementById('errorDir');

		var docmento = document.form1.direccion_re;
		if( docmento.value === '' )
		{
			errorDir.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorDir.style.visibility = 'hidden';
		}

					// validar pais
		var pais = document.getElementById('errorpa');

		var pais = document.form1.pais_re;
		if( pais.value === '' )
		{
			errorpa.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorpa.style.visibility = 'hidden';
		}

						// validar correo 
		var correo = document.getElementById('errorem');

		var correo = document.form1.email_re;
		if( correo.value === '' )
		{
			errorem.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorem.style.visibility = 'hidden';
			var re = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
				if ( !re.test(form1.email_re.value) )
				{
					alert ( 'email No Valido' );
					correo.style.background = '#B7D0EB';
					form1.email_re.focus();
					error = 1;					
				}
		}

		//validar contrase�as
		var c1 = document.form1.contra1_re;
		if( c1.value === '' )
		{
			errorc1.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorc1.style.visibility = 'hidden';
		}

if (document.form1.contra1_re.length<6)
{
alert ( 'contrase�a menor a 6 digitos' );
}
var c2 = document.form1.contra2_re;
		if( c2.value === '' )
		{
			errorc2.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorc2.style.visibility = 'hidden';
		}

		if ( form1.contra1_re.value != form1.contra2_re.value )
		{
			alert ( 'Las claves NO coinciden' );
			form1.contra1_re.focus();
				error = 1;	
		}
		

	// validar pregunta
		var errorpre = document.getElementById('errorpre');

		var pregunta = document.form1.pregunta_re;
		if( pregunta.value === '' )
		{
			errorpre.style.visibility = 'visible';
			pregunta.style.background = '#B7D0EB';
			error = 1;
		}
		else
		{
			errorpre.style.visibility = 'hidden';
				// validar pregunta
				var re = /^[a-z ]*$/i;
				if ( !re.test(form1.pregunta_re.value) )
				{
					alert ( 'Pregunta No Valida' );
					pregunta.style.background = '#B7D0EB';
					form1.pregunta_re.focus();
					error = 1;					
				}
	
		}

	// validar respuesta
		var errorres = document.getElementById('errorres');

		var respuesta = document.form1.respuesta_re;
		if( respuesta.value === '' )
		{
			errorres.style.visibility = 'visible';
			respuesta.style.background = '#B7D0EB';
			error = 1;
		}
		else
		{
			errorres.style.visibility = 'hidden';
				// validar respuesta
				var re = /^[a-z]*$/i;
				if ( !re.test(form1.respuesta_re.value) )
				{
					alert ( 'Respuesta no Valida' );
					respuesta.style.background = '#B7D0EB';
					form1.respuesta_re.focus();
					error = 1;					
				}
	
		}
		
	

		
		if ( error == 0 )
		{
			alert ( 'Datos enviados exitosamente' );

			return true;
		}
		else
		{
			return false;
		}
				
	}








	
// expresiones regulares
/*

Letras y espacios
var re = /^[a-z ]*$/i;

Letras, numeros y espacios
var re = /^[a-z0-9 ]*$/i;

Correo Electronico
var re = /^([a-z0-9_-])+([\.a-z0-9_-])*@([a-z0-9-])+(\.[a-z0-9-]+)*\.([a-z]{2,6})*$/i;

Numero Entero
var re = /^[0-9]+$/;

Numero Decimal
var re = /^[0-9\.]+$/;

*/
