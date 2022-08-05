
<?php 
include("modulos/conexion.php");
 ?>
<section id="principal">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4 col-md-offset-4">
					<h2 align="center">Pre rentas activas</h2>
					<div class="divider"></div>
					<p align="center">En esta lista se muestran las pre rentas realizadas por el cliente.</p>
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
							<th>Monto Total a Pagar</th>
						</tr>

						<?php 

							$email_re = $_SESSION['email_re'];
    						$sql1 = "select id_registro from registros where email_re = '$email_re'";  
    						$inst1 = mysqli_query($con,$sql1);
    						$rs1 = mysqli_fetch_array($inst1);

    						$id_registro = $rs1["id_registro"];

							$sql = "select * from pre_renta where id_registro = '$id_registro' ;";
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
							<div class="col s12 m4 l4 center-align">
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" ><a class="black-text" href="index.php?pag=pre_renta">Agregar</a>
					      		<i class="material-icons right">add</i>
					      		</button>
							</div>
							<div class="col s12 m4 l4 center">
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" name="action"><a class="black-text" href="index.php?pag=sel_eli_pre">Eliminar</a>
					      		<i class="material-icons right">delete</i>
					      		</button>
							</div>
							<div class="col s12 m4 l4 center">
								<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" name="action"><a class="black-text" href="index.php?pag=imprimir">Imprimir</a>
					      		<i class="material-icons right">print</i>
					      		</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>