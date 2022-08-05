<?php 

	include("modulos/conexion.php");

 ?>

<div class="navbar-fixed" id="inicio">
	<nav>
		<div class="nav-wrapper #cfd8dc blue-grey lighten-4">
			<a href="index.php#inicio" class="brand-logo center img-responsive"><img src="imagenes/logo.png" width="215" alt=""></a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons blue-text">menu</i></a>
			<ul class="left hide-on-med-and-down">
				<li><a href="index.php#servicios" class="black-text"><i class="material-icons right blue-text">directions_car</i>Servicios</a></li>
				<li><a href="index.php#contactos" class="black-text"><i class="material-icons right blue-text">email</i>Contactos</a></li>
				<li><a href="index.php#nosotros" class="black-text"><i class="material-icons right blue-text">assignment_ind</i>Nosotros</a></li>
			</ul>


			<?php 
				session_start();
				$email_re = $_SESSION['email_re'];
				$sql1 = "select email_re, nombre_re from registros where email_re='$email_re' ";
				$inst1 = mysqli_query($con,$sql1);
				$rs1 = mysqli_fetch_array($inst1);

			if($rs1["email_re"] =='')
			{
				$rs1["email_re"] = 3;
			}


				if ($_SESSION['email_re'] == $rs1["email_re"] and $rs1["nombre_re"] != 'Admin') {

					echo "

			<ul class='right hide-on-med-and-down'>
				<li><a class='dropdown-button black-text' data-constrainwidth='false' href='#!' data-activates='dropdown1'><i class='material-icons left blue-text'>account_circle</i>".$rs1["nombre_re"]."<i class='material-icons right blue-text'>arrow_drop_down</i></a></li>
			</ul>
			<ul id='dropdown1' class='dropdown-content'>
 				<li><a href='index.php?pag=perfil' class='black-text'><i class='material-icons blue-text'>perm_identity</i>Perfil</a></li>
 				<li><a href='index.php?pag=pre_renta1' class='black-text'><i class='material-icons blue-text'>create</i>Pre-Renta</a></li>
  				<li><a href='salir.php' class='black-text'><i class='material-icons blue-text'>exit_to_app</i>Salir</a></li>
			</ul>";	
				}

				if ($_SESSION['email_re'] == 'admin') {

					echo "

			<ul class='right hide-on-med-and-down'>
				<li><a class='dropdown-button black-text' data-constrainwidth='false' href='#!' data-activates='dropdown1'><i class='material-icons left blue-text'>account_circle</i>".$rs1["nombre_re"]."<i class='material-icons right blue-text'>arrow_drop_down</i></a></li>
			</ul>
			<ul id='dropdown1' class='dropdown-content'>
 				<li><a href='index.php?pag=vehiculos' class='black-text'><i class='material-icons blue-text'>directions_car</i>Vehiculos</a></li>
 				<li><a href='index.php?pag=marca' class='black-text'><i class='material-icons blue-text'>copyright</i>Marcas</a></li>
 				<li><a href='index.php?pag=modelo' class='black-text'><i class='material-icons blue-text'>directions_car</i>Modelos</a></li>
 				<li><a href='index.php?pag=tarifa' class='black-text'><i class='material-icons blue-text'>monetization_on</i>Tarifas</a></li>
 				<li><a href='index.php?pag=reporte' class='black-text'><i class='material-icons blue-text'>content_paste</i>Reportes</a></li>
  				<li><a href='salir.php' class='black-text'><i class='material-icons blue-text'>exit_to_app</i>Salir</a></li>
			</ul>";	
				}
	
			if ($rs1["email_re"] == 3){

					echo "

			<ul class='right hide-on-med-and-down'>
				<li><a class='dropdown-button black-text' data-constrainwidth='false' href='#!' data-activates='dropdown1'><i class='material-icons left blue-text'>account_circle</i>Accesos<i class='material-icons right blue-text'>arrow_drop_down</i></a></li>
			</ul>
			<ul id='dropdown1' class='dropdown-content'>
 				<li><a href='index.php?pag=registro' class='black-text'><i class='material-icons blue-text'>create</i>Registro</a></li>
  				<li><a href='index.php?pag=login' class='black-text'><i class='material-icons blue-text'>person</i>Inicio de Sesion</a></li>
			</ul>"
			;
			}
			 ?>

		</div>
	</nav>
			<ul id="mobile-demo" class="side-nav">
				<li><a href="index.php#servicios"><i class="material-icons blue-text left">directions_car</i>Servicios</a></li>
				<li><a href="index.php#contactos" class="black-text"><i class="material-icons left blue-text">email</i>Contactos</a></li>
				<li><a href="index.php#nosotros" class="black-text"><i class="material-icons left blue-text">assignment_ind</i>Nosotros</a></li>
				<ul class="">
				</ul>
				<?php  	



			if ($_SESSION['email_re'] == $rs1["email_re"] and $rs1["nombre_re"] != 'Admin') {
			
			echo "
			<li><a class='dropdown-button black-text' data-constrainwidth='false' href='#!' data-activates='dropdown2'><i class='material-icons left blue-text'>account_circle</i>".$rs1["nombre_re"]."<i class='material-icons right blue-text'>arrow_drop_down</i></a></li>

			<ul id='dropdown2' class='dropdown-content'>
 				<li><a href='index.php?pag=perfil' class='black-text'><i class='material-icons blue-text'>perm_identity</i>Perfil</a></li>
 				<li><a href='index.php?pag=pre_renta1' class='black-text'><i class='material-icons blue-text'>create</i>Pre-Renta</a></li>
  				<li><a href='salir.php' class='black-text'><i class='material-icons blue-text'>exit_to_app</i>Salir</a></li>

			</ul>";
		}

		if ($_SESSION['email_re'] == 'admin') {

					echo "

					<li><a class='dropdown-button black-text' data-constrainwidth='false' href='#!' data-activates='dropdown2'><i class='material-icons left blue-text'>account_circle</i>".$rs1["nombre_re"]."<i class='material-icons right blue-text'>arrow_drop_down</i></a></li>

			<ul id='dropdown2' class='dropdown-content'>
 				<li><a href='index.php?pag=vehiculos' class='black-text'><i class='material-icons blue-text'>directions_car</i>Vehiculos</a></li>
 				<li><a href='index.php?pag=marca' class='black-text'><i class='material-icons blue-text'>copyright</i>Marcas</a></li>
 				<li><a href='index.php?pag=modelo' class='black-text'><i class='material-icons blue-text'>directions_car</i>Modelos</a></li>
 				<li><a href='index.php?pag=tarifa' class='black-text'><i class='material-icons blue-text'>monetization_on</i>Tarifas</a></li>
 				<li><a href='index.php?pag=reporte' class='black-text'><i class='material-icons blue-text'>content_paste</i>Reportes</a></li>
  				<li><a href='salir.php' class='black-text'><i class='material-icons blue-text'>exit_to_app</i>Salir</a></li>

			</ul>";
			}

			if ($rs1["email_re"] == 3){

		echo "


			<li><a class='dropdown-button black-text' data-constrainwidth='false' href='#!' data-activates='dropdown2'><i class='material-icons left blue-text'>account_circle</i>Acceso<i class='material-icons right blue-text'>arrow_drop_down</i></a></li>

			<ul id='dropdown2' class='dropdown-content'>
 				<li><a href='index.php?pag=registro' class='black-text'><i class='material-icons blue-text'>create</i>Registro</a></li>
  				<li><a href='index.php?pag=login' class='black-text'><i class='material-icons blue-text'>person</i>Inicio de Sesion</a></li>
			</ul>";
		}

			?>

			</ul>
	</div>