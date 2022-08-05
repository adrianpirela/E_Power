<div class="container">
			<div class="row text-center">
				<div class="col-md-4 col-md-offset-4">
					<h2 align="center">Seleccione la pre renta a imprimir</h2>
					<div class="divider"></div>
					<p align="center">Seleccione el numero de registro de la pre renta a imprimir.</p>
				<br>
					<form action="modulos/imprimir.php" method="post">
						<div class="col s12 m12 l4 offset-l4">
							<label>Pre renta N° de Registro</label>
							<select name="idpre_renta" class="form-control">
								<option disabled>--- Seleccione ---</option>
				<?php 
					include("conexion.php");
					session_start();

					$email_re = $_SESSION['email_re'];
				    $sql1 = "select id_registro from registros where email_re = '$email_re'";
				    $inst1 = mysqli_query($con,$sql1);
				    $rs1 = mysqli_fetch_array($inst1);
				    $id_registro = $rs1["id_registro"];

					$sql = "select idpre_renta from pre_renta where id_registro = '$id_registro';";
					$inst = mysqli_query($con,$sql);

					while ($rs = mysqli_fetch_array($inst)) {
						echo "<option value='".$rs["idpre_renta"]."'>".utf8_encode($rs["idpre_renta"])."</option>";
					}
				 ?>
							</select>
						</div>
						
						<div class="container">
							<div class="row">
								<div class="col s12 m12 l4 offset-l4">
									<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" type="submit" name="action">Imprimir
					      		<i class="material-icons right">print</i>
					      		</button>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
			
		</div>