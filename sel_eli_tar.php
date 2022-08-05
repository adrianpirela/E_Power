<div class="container">
			<div class="row text-center">
				<div class="col-md-4 col-md-offset-4">
					<h2 align="center">Seleccione la tarifa a eliminar</h2>
					<div class="divider"></div>
					<p align="center">Seleccione el numero de registro de la tarifa a eliminar.</p>
				<br>
					<form action="modulos/eliminar_tar.php" method="post">
						<div class="col s12 m12 l4 offset-l4">
							<label>Marca N° de Registro</label>
							<select name="id" class="form-control">
								<option disabled>--- Seleccione ---</option>
				<?php 
					include("modulos/conexion.php");

					$sql = "select id from tarifa;";
					$inst = mysqli_query($con,$sql);

					while ($rs = mysqli_fetch_array($inst)) {
						echo "<option value='".$rs["id"]."'>".utf8_encode($rs["id"])."</option>";
					}
				 ?>
							</select>
						</div>
						
						<div class="container">
							<div class="row">
								<div class="col s12 m12 l4 offset-l4">
									<button button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" name="action"><a class="black-text">Enviar
					      		<i class="material-icons right">send</i>
					      		</button>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
			
		</div>