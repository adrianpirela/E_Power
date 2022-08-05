<?php 
include("modulos/conexion.php");
 ?>
<section id="principal">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4 col-md-offset-4">
					<h2 align="center">Vehiculos - Modelos</h2>
					<div class="divider"></div>
					<p align="center">Aqui podras agregar y eliminar los modelos de vehiculos registrados en el sistema.</p>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 centered">
					<table class="responsive-table bordered">
						
						<tr>
							<th style="text-align: center">N° de registro</th>
							<th style="text-align: center">Modelo</th>
							<th style="text-align: center">Marca</th>
						</tr>

						<?php 


							$sql = "select * from modelo;";
							$inst = mysqli_query($con,$sql);
							while ($rs = mysqli_fetch_array($inst)) {
	
						 ?>
						<tr>
							<td style="text-align: center"><?php echo $rs["idmodelo"]; ?></td>
							<td style="text-align: center"><?php echo utf8_encode($rs["descripcion"]); ?></td>

							<?php 

								$marca = $rs["idmarca"];

								$sql1 = "select * from marca where idmarca = '$marca';";
								$inst1 = mysqli_query($con,$sql1);
								while ($rs1 = mysqli_fetch_array($inst1)) {


							 ?>
							<td style="text-align: center"><?php echo $rs1["descripcion"]; ?></td>
						<?php 
							}//end while
							}//end while
						 ?>
						</tr>
					</table>
					<br>
					<br>
					<div class="container">
						<div class="row">
							<div class="col s12 m6 l6 center-align" style="
    padding-bottom: 15px;
">
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" id="action1"><a class="black-text" href="index.php?pag=modelo1">Agregar</a>
					      		<i class="material-icons right">add_circle</i>
					      		</button>	
							</div>
							<div class="col s12 m6 l6 center" style="
    padding-bottom: 15px;
">
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" id="action1"><a class="black-text" href="index.php?pag=sel_eli_mod">Eliminar</a>
					      		<i class="material-icons right">delete</i>
					      		</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>