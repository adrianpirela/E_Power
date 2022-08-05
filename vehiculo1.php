<?php 
include("modulos/conexion.php");
 ?>

<script src="js/register.js?v=1.27"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<section>
	<div class="container">
		<form class="col s6" action="modulos/vehiculo_re.php" method="post">
		<h4 class="center-align">Agregar Vehiculos a Inventario</h4>
			<div class="divider"></div>
      <br>
      <span><h6 align="center">Aqui podras registrar en el sistema los vehiculos disponibles.</h6></span>
			<br>


 <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="col s12 m6 l6">
              <label>Marca</label>
               <select id="Selectmarca" name="marca_pre" style="">

        <?php 
          $sql = "select idmarca, descripcion from marca;";
          $inst = mysqli_query($con,$sql);

          while ($rs = mysqli_fetch_array($inst)) {
            echo "<option value='".$rs["idmarca"]."'>".utf8_encode($rs["descripcion"])."</option>";
          }

         ?>
          </select>
            </div>

            <div class=" col s12 m6 l6">
              <label>Modelo</label>
           <select id="Selectmodelo" name="modelo_pre" style="display: block !important;border-color: white;position: absolute;top: 0px;left: 5px;">

          </select>
        </div>

        <div class="input-field col s12 m6 l6">
          <input name="placa" type="text" maxlength="25"  class="validate">
          <label for="placa">Placa</label>
          <span id='errorApe' class='error'>Campo Requerido</span>
        </div>
      </div>
    </div>

  	<div class="row">
  		 <div class="col s12 m12 l8 offset-l2">
  		<div class="col l4 offset-l4">
  			<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" type="submit" name="action">Registrar
      		<i class="material-icons right">send</i>
      		</button>
  		</div>
  		</div>
  	</div>
    	</form>
    	</div>
	</section>