<section>
	<div class="container">
		<form class="col s6" action="modulos/tarifa_re.php" method="post">
		<h4 class="center-align">Agregar Marca</h4>
			<div class="divider"></div>
      <br>
      <span><h6 align="center">Aqui podras registrar en el sistema las marcas de vehiculos.</h6></span>
			<br>


 <div class="row">
      <div class="col s12 m6 l6 col-lg-offset-2">
              <label>Marca</label>
              <select name="idmarca" class="form-control">
                <option disabled>--- Seleccione ---</option>
        <?php 
          include("modulos/conexion.php");

          $sql = "select * from marca;";
          $inst = mysqli_query($con,$sql);

          while ($rs = mysqli_fetch_array($inst)) {
            echo "<option value='".$rs["idmarca"]."'>".utf8_encode($rs["descripcion"])."</option>";
          }
         ?>
              </select>
            </div>
        <div class="input-field col s12 m6 l6 col-lg-offset-2">

         <label for="c1">Monto Bs. por dia</label>
        <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1" name="monto" />

         <!--  <input name="descripcion_marca" type="text" maxlength="25"  class="validate">
          <label for="descripcion_marca">Monto Bs.</label>
          <span id='errorApe' class='error'>Campo Requerido</span> -->
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