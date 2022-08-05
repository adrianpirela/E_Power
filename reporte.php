
<?php 
include("modulos/conexion.php");
 ?>
<section id="principal">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4 col-md-offset-4">
					<h2 align="center">Reporte Pre rentas</h2>
					<div class="divider"></div>
					<p align="center">En esta lista se muestran las pre rentas realizadas por todos los clientes.</p>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 centered">
					<table class="table table-responsive bordered">
						
						<tr>
							<th>N° de registro</th>
							<th>Desde</th>
							<th>Hasta</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Monto</th>
						</tr>

						<?php 
							$sql = "select * from pre_renta;";
							$inst = mysqli_query($con,$sql);
							while ($rs = mysqli_fetch_array($inst)) {
							
						 ?>
						<tr>
							<td><?php echo $rs["idpre_renta"]; ?></td>
							<td><?php echo utf8_encode($rs["fecha_ini"]); ?></td>
							<td><?php echo utf8_encode($rs["fecha_fin"]); ?></td>
							
							<?php 

							$marca = $rs["marca_pre"];

							$sql2 = "select * from marca where idmarca = '$marca';";
							$inst2 = mysqli_query($con,$sql2);
							while ($rs2 = mysqli_fetch_array($inst2)) {

							 ?>

							<td><?php echo $rs2["descripcion"]; ?></td>
							<?php 

							$modelo = $rs["modelo_pre"];

							$sql3 = "select * from modelo where idmodelo = '$modelo' ;";
							$inst3 = mysqli_query($con,$sql3);
							while ($rs3 = mysqli_fetch_array($inst3)) {


							 ?>
							<td><?php echo utf8_encode($rs3["descripcion"]); ?></td>
							<td><?php echo utf8_encode($rs["monto"]); ?></td>

						<?php 
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
							<div class="col l4 offset-l4">
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" name="action"><a class="black-text" href="imprimirprueba.php">Imprimir</a>
					      		<i class="material-icons right">print</i>
					      		</button>
							</div>
						</div>
					</div>
<div class="container">
						<div class="row">
							<div class="col l4 offset-l4">
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" name="action"><a class="black-text" href="imprimirprueba2.php">ImprimirUsr</a>
					      		<i class="material-icons right">print</i>
					      		</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>