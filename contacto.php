<section id="contactos">
<form name="pag" method="get">
	<input type="hidden" name="pag" value="contacto">
</form>

<div class="container">
		<div class="row">

		<h3 class="center-align">Contactanos</h3>
			<div class="divider"></div>
			<br>
			<br>


			<div class="col s12 m6 l6">
				<div class="card-panel z-depth-4 center-align">
					<i class="material-icons blue-text large">location_on</i>
					<span class=""><h5>¡Visitanos!</h5></span>
					<p align="justify">Sede Principal Av. Las Delicias con esquina Av. 5 de Julio Edificio E-Power Rent a Car</p>
					<i class="material-icons blue-text large">call</i>
					<span class=""><h5>¡Llamanos!</h5></span>
					<p align="justify">0261-3007712 / 0261-3007680 / 0261-3007720</p>
					<p align="justify">Correo: ventas@epower.com.ve</p>
				</div>
			</div>

		<div class="col s12 m6 l6">
				<div class="card-panel z-depth-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d490.11475268884584!2d-71.61903078612941!3d10.663471147011277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1505914969166" width="437" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

			

			<form class="col s12" action="modulos/sugerencias.php" method="post">
		<h4 class="center-align">Escribenos</h4>
			<div class="divider"></div>
		<span class="center-align"><h5>Ante cualquier inquietud puedes escribirnos atraves de este fomulario.</h5></span>
			<br>

      <div class="row">
        <div class="input-field col s6">
          <input name="nombre_su" type="text" maxlength="25" class="validate">
          <label for="nombre_su">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input name="apellido_su" type="text" maxlength="25" class="validate">
          <label for="apellido_su">Apellido</label>
        </div>
      </div>
	
	<div class="row">
		   <div class="input-field col s12">
		          <input name="email_su" type="email" maxlength="45" class="validate">
		          <label for="email_su" data-error="Correo Invalido" data-success="Correo Validado">Correo</label>
		    </div>
	</div>
	<div class="row">
        <div class="input-field col s12">
          <textarea name="mensaje_su" maxlength="450" class="materialize-textarea"></textarea>
          <label for="mensaje_su">Mensaje</label>
        </div>
     </div>
        <button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
    </form>

		</div>
		</div>
		</section>