<div class="container">
			<div class="row text-center">
				<div class="col-md-4 col-md-offset-4">
					<h2 align="center">Seleccione el modelo a eliminar</h2>
					<div class="divider"></div>
					<p align="center">Seleccione el numero de registro del modelo a eliminar.</p>
				<br>
					<form action="modulos/eliminar_mod.php" method="post">
						<div class="col s12 m12 l4 offset-l4">
							<label>Modelo N° de Registro</label>
							<select name="idmodelo" class="form-control">
								<option disabled>--- Seleccione ---</option>
				<?php 
					include("modulos/conexion.php");

					$sql = "select idmodelo from modelo;";
					$inst = mysqli_query($con,$sql);

					while ($rs = mysqli_fetch_array($inst)) {
						echo "<option value='".$rs["idmodelo"]."'>".utf8_encode($rs["descripcion"])."</option>";
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