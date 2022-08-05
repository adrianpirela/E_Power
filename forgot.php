
<section>
	<div class="container">
		<form class="col s6" action="validaru.php" method="post">
    <br>
		<h4 class="center-align">Inicio de Sesion</h4>
    <br>
			<div class="divider"></div>
      <br>
      <h5 class="center-align">Ingrese su usuario y responda su pregunta secreta.</h5>
			<br>
      <br>
        <div class="row">
          <div class="col s12 m12 l8 offset-l2">
           <div class="input-field col s12">
            <input name="email_re" type="text" class="validate">
            <label for="email_re" data-error="Usuario Invalido" data-success="Correo Validado">Correo</label>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col s12 m12 l8 offset-l2">
           <div class="input-field col s12">
            <input name="pregunta_re" type="text" class="validate">
            <label for="pregunta_re" >Pregunta Secreta</label>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s12 m12 l12">
          <input name="respuesta_re" type="password" class="validate">
          <label for="respuesta_re">Respuesta</label>
        </div>
      </div>
	  </div>
    <br>
  	<div class="row">
  		 <div class="col s12 m12 l8 offset-l2">
  		<div class="col l4 offset-l4">
  			<button class="btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align" type="submit" name="action">Enviar
      		<i class="material-icons right">send</i>
      		</button>
  		</div>
  		</div>
      </div>
      <br>
      <br>
      <br>
      <br>
    	</form>
    	</div>

	</section>
