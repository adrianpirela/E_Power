<?php 
  include_once('js/funciones.php');
 ?>
 <script src="js/funciones.js"></script>

<section>
	<div class="container">
		<form name="form1" class="col s6" action="modulos/registro.php" method="post" onsubmit='return validarform();'>
		<h4 class="center-align">Registro</h4>
			<div class="divider"></div>
			<br>

      <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s12 m6 l6">
          <input name="nombre_re" id="nombre_re" type="text" maxlength="25" class="validate">
          <label for="nombre_re">Nombre</label>
         <span id='errorNom' class='error' >Campo Requerido</span>
        </div>
        <div class="input-field col s12 m6 l6">
          <input name="apellido_re" type="text" maxlength="25"  class="validate">
          <label for="apellido_re">Apellido</label>
          <span id='errorApe' class='error'>Campo Requerido</span>
        </div>
      </div>
	  </div>

       <div class="row">
		<div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s2 m2 l2">
        <select name="codigo_re" >
        		<option value="" disabled selected>Codigo</option>
        		<option value="0414">0414</option>
        		<option value="0424">0424</option>
        		<option value="0416">0416</option>
        		<option value="0426">0426</option>
        		<option value="0412">0412</option>
        	</select>
           <span id='errorEst' class='error'>Campo Requerido</span>
        </div>
        <div class="input-field col s4 m4 l4">
        	 <input name="telefono_re" type="text"  maxlength="8" class="validate">
          	 <label for="telefono_re">Nº Telefono</label>
              <span id='errortel' class='error'>Campo Requerido</span>
        </div>

          <div class="input-field col s2 m2 l2">
        <select name="tip_doc" >
        		<option value="" disabled selected>Tipo Doc.</option>
        		<option value="v">V</option>
        		<option value="e">E</option>
        		<option value="j">J</option>
        	</select>
           <span id='errordoc' class='error'>Campo Requerido</span>
        </div>
        <div class="input-field col s4 m4 l4">
        	 <input name="num_doc" type="text"  maxlength="9" class="validate">
          	 <label for="num_doc">Nº Documento</label>
             <span id='errorNdoc' class='error'>Campo Requerido</span>
        </div>
		</div>
      </div>

      <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s12 m6 l6">
          <input name="direccion_re" type="text"  maxlength="40" class="validate">
          <label for="direccion_re">Direcciòn</label>
           <span id='errorDir' class='error'>Campo Requerido</span>
        </div>
        <div class="input-field col s12 m6 l6">
        	<select name="pais_re" >
        		<option value="" disabled selected>Paìs</option>
        		<option value="argentina">Argentina</option>
        		<option value="panama">Panama</option>
        		<option value="brazil">Brazil</option>
        		<option value="bolivia">Bolivia</option>
        		<option value="paraguay">Paraguay</option>
        		<option value="uruguay">Uruguay</option>
        		<option value="peru">Peru</option>
        		<option value="ecuador">Ecuador</option>
        		<option value="chile">Chiles</option>
        		<option value="colombia">Colombia</option>
        		<option value="venezuela">Venezuela</option>
        	</select>
           <span id='errorpa' class='error'>Campo Requerido</span>
        </div>
        </div>
      </div>
	
	
	<div class="row">
	<div class="col s12 m12 l8 offset-l2">
		   <div class="input-field col s12">
		          <input name="email_re" type="email"  maxlength="40" class="validate">
		          <label for="email" >Correo</label>
              <span id='errorem' class='error'>Campo Requerido</span>
		    </div>
		    </div>
	</div>


      <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s12 m6 l6">
          <input name="contra1_re" type="password" maxlength="15" class="validate">
          <label for="contra1_re">Contraseña</label>  
            <span id='errorc1' class='error'>Campo Requerido</span> 
             </div>
        <div class="input-field col s12 m6 l6">
          <input name="contra2_re" type="password"  maxlength="15" class="validate">
          <label for="contra2_re">Verificar Contraseñas</label>
            <span id='errorc2' class='error'>Campo Requerido</span>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m12 l8 offset-l2">
          <div class="input-field col s12 m12 l12">
            <input name="pregunta_re" type="text"  maxlength="250" class="validate" placeholder="¿Cual es el nombre de tu mama?">
            <label for="pregunta_re">Pregunta de Seguridad</label>
            <span id='errorpre' class='error'>Campo Requerido</span>
          </div>
        </div>
      </div>

            <div class="row">
        <div class="col s12 m12 l8 offset-l2">
          <div class="input-field col s12 m12 l12">
            <input name="respuesta_re" type="password"  maxlength="25" class="validate" placeholder="Maria">
            <label for="respuesta_re">Respuesta de Seguridad</label>
                <span id='errorres' class='error'>Campo Requerido</span>
          </div>
        </div>
      </div>

  	<div class="row">
  		 <div class="col s12 m12 l8 offset-l2">
  		<div class="col l4 offset-l4">
              <button class='btn waves-effect #cfd8dc blue-grey lighten-4 black-text z-depth-4 center-align' type='submit' name='action'>Enviar
          <i class='material-icons right'>send</i>
          </button>

  		</div>
  		</div>
  	</div>
    	</form>
    	</div>
	</section>