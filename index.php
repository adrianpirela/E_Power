<?php 
	error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>E-Power Rent a Car</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css?v=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<link rel="shortcut icon" href="imagenes/logo1.png">
<header id="inicio">
 <?php 
 	include_once('menu.php');
  ?>
</header>
<?php 
			$pagina = $_GET['pag'];
			if ( $pagina == '')
			{


				include_once("slider.php");
				include_once('servicios.php');
				include_once('contacto.php');
				include_once('nosotros.php');
				
			}

	?>
<?php 




			$pagina = $_GET['pag'];
			if ( $pagina == 'registro') 
			{
				include_once('registro.php');
			}

			$login = $_GET['pag'];
			if ( $login == 'login')
			{
				include_once('login.php');
			}
			if ( $login == 'password')
			{
				include_once('password.php');
			}
			if ( $login == 'forgot')
			{
				include_once('forgot.php');
			}
			$pagina = $_GET['pag'];
			if ( $pagina == 'perfil') 
			{
				include_once('perfil.php');
			}
			$pagina = $_GET['pag'];
			if ( $pagina == 'pre_renta') 
			{
				include_once('pre_renta.php');
			}
			$pagina = $_GET['pag'];
			if ( $pagina == 'pre_renta1') 
			{
				include_once('pre_renta1.php');
			}
			$pagina = $_GET['pag'];
			if ( $pagina == 'sel_eli_pre') 
			{
				include_once('sel_eli_pre.php');
			}
			$pagina = $_GET['pag'];
			if ( $pagina == 'imprimir') 
			{
				include_once('imprimir.php');
			}
			$pagina = $_GET['pag'];
			if ( $pagina == 'vehiculos') 
			{
				include_once('vehiculos.php');
			}

			if ( $pagina == 'vehiculo1') 
			{
				include_once('vehiculo1.php');
			}

			$pagina = $_GET['pag'];
			if ( $pagina == 'marca') 
			{
				include_once('marca.php');
			}
			$pagina = $_GET['pag'];
			if ( $pagina == 'marca1') 
			{
				include_once('marca1.php');
			}
			$pagina = $_GET['pag'];
			if ( $pagina == 'sel_eli_mar') 
			{
				include_once('sel_eli_mar.php');
			}
			if ( $pagina == 'modelo') 
			{
				include_once('modelo.php');
			}
			if ( $pagina == 'modelo1') 
			{
				include_once('modelo1.php');
			}
			if ( $pagina == 'sel_eli_mod') 
			{
				include_once('sel_eli_mod.php');
			}
			if ( $pagina == 'tarifa') 
			{
				include_once('tarifa.php');
			}
			if ( $pagina == 'tarifa1') 
			{
				include_once('tarifa1.php');
			}
			if ( $pagina == 'sel_eli_tar') 
			{
				include_once('sel_eli_tar.php');
			}
			if ( $pagina == 'reporte') 
			{
				include_once('reporte.php');
			}


	 ?>
<footer class="page-footer #cfd8dc blue-grey lighten-4">
	<?php 

		include_once('pie.php');
	 ?>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/materialize.min.js"></script>
<script>
	$(document).ready(function(){
		$('.button-collapse').sideNav();
		$('.slider').slider();
		$('.carousel').carousel();
		$('.materialboxed').materialbox();
		$('select').material_select();

		$('.datepicker').pickadate({
			selectMonths: false,
			selectYears: false,
			labelMonthNext: 'Mes siguiente',
			labelMonthPrev: 'Mes anterior',

			labelMonthSelect: 'Selecciona un mes',
			labelYearSelect: 'Selecciona un año',

			monthsFull:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			monthsShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],

			weekdaysFull: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
			weekdaysShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
			weekdaysLetter: ['D','L','M','M','J','V','S'],

			today: 'Hoy',
			clear:'Limpiar',
			close: 'Listo',
			closeOnSelect: false
		});

	})


</script>
</html>