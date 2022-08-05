
<?php 
include("modulos/conexion.php");
 ?>
<section id="principal">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4 col-md-offset-4">
					<h2 align="center">Vehiculos Disponibles</h2>
					<div class="divider"></div>
					<p align="center">Aqui podras modificar el inventario de vehiculos disponibles.</p>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 centered">
					<table class="responsive-table bordered">
						
						<tr>
							<th style="text-align: center">Placa</th>
							<th style="text-align: center">Marca</th>
							<th style="text-align: center">Modelo</th>
							<th style="text-align: center">Precio por Dia</th>
						</tr>

						<?php 

							
							$sql = "select * from vehiculos;";
							$inst = mysqli_query($con,$sql);
							while ($rs = mysqli_fetch_array($inst)) {
								$marca = $rs["idmarca"];
								$modelo = $rs["idmodelo"];
						 ?>
						<tr>
							<td style="text-align: center"><?php echo $rs["placa"]; ?></td>

							<?php 

								$sql1 = "select * from marca where idmarca = '$marca';";
								$inst1 = mysqli_query($con,$sql1);
								while ($rs1 = mysqli_fetch_array($inst1)) {

							 ?>
							<td style="text-align: center"><?php echo $rs1["descripcion"]; ?></td>

							<?php 

								$sql2 = "select * from modelo where idmodelo = '$modelo';";
								$inst2 = mysqli_query($con,$sql2);
								while ($rs2 = mysqli_fetch_array($inst2)) {

							 ?>
							<td style="text-align: center"><?php echo utf8_encode($rs2["descripcion"]); ?></td>

								<?php 

									$sql2 = "select * from modelo where idmodelo = '$modelo';";
								$inst2 = mysqli_query($con,$sql2);
								while ($rs2 = mysqli_fetch_array($inst2)) {

								 ?>

							<td style="text-align: center"><?php echo utf8_encode($rs2["descripcion"]); ?></td>
						<?php 
							}//end while
							}//end while
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
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" id="action1"><a class="black-text" href="index.php?pag=vehiculo1">Agregar</a>
					      		<i class="material-icons right">add_circle</i>
					      		</button>	
							</div>
							<div class="col s12 m6 l6 center" style="
    padding-bottom: 15px;
">
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" id="action1"><a class="black-text" href="index.php?pag=sel_eli_pre">Eliminar</a>
					      		<i class="material-icons right">delete</i>
					      		</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>