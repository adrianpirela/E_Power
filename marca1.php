<section>
	<div class="container">
		<form class="col s6" action="modulos/marca_re.php" method="post">
		<h4 class="center-align">Agregar Marca</h4>
			<div class="divider"></div>
      <br>
      <span><h6 align="center">Aqui podras registrar en el sistema las marcas de vehiculos.</h6></span>
			<br>


 <div class="row">
      <div class="col s12 m12 l6 offset-l3">
        <div class="input-field col s12 m12 l12">
          <input name="descripcion" type="text" maxlength="25" class="validate">
          <label for="descripcion">Nombre de la Marca</label>
         <span id='errorNom' class='error' >Campo Requerido</span>
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