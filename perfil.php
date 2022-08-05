<?php 

    include("modulos/conexion.php");

    $email_re = $_SESSION['email_re'];
    $sql = "select * from registros where email_re = '$email_re'";  
    $inst = mysqli_query($con,$sql);
    $rs = mysqli_fetch_array($inst);

 ?>


<section>
	<div class="container">
		<form class="col s6" action="modulos/mod_perfil.php" method="post">
		<h4 class="center-align">Perfil - Modificar</h4>

    <span><h5 align="center">Aqui puedes modificar la informacion perteneciente a tu perfil.</h5></span>
			<div class="divider"></div>
			<br>

      <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s12 m6 l6">
          <input name="nombre_re" type="text" class="validate"
          <?php echo "value='".utf8_encode($rs["nombre_re"])."'" ?>
          >
          <label for="nombre_re">Nombre</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <input name="apellido_re" type="text" class="validate"
          <?php echo "value='".utf8_encode($rs["apellido_re"])."'" ?>
          >
          <label for="apellido_re">Apellido</label>
        </div>
      </div>
	  </div>

       <div class="row">
		<div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s2 m2 l2">
        <select name="codigo_re">
          <?php echo " <option value='".$rs["codigo_re"]."' selected>".$rs["codigo_re"]."</option>" ?>
        		<option value="0414">0414</option>
        		<option value="0424">0424</option>
        		<option value="0416">0416</option>
        		<option value="0426">0426</option>
        		<option value="0412">0412</option>
        	</select>
        </div>
        <div class="input-field col s4 m4 l4">
        	 <input name="telefono_re" type="text" class="validate"
            <?php echo "value='".$rs["telefono_re"]."'" ?>
           >
          	 <label for="telefono_re">Nº Telefono</label>
        </div>

          <div class="input-field col s2 m2 l2">
        <select name="tip_doc"
        >
        		<?php echo " <option value='".$rs["tip_doc"]."' selected>".$rs["tip_doc"]."</option>" ?>
        		<option value="v">V</option>
        		<option value="e">E</option>
        		<option value="j">J</option>
        	</select>
        </div>
        <div class="input-field col s4 m4 l4">
        	 <input name="num_doc" type="text" class="validate"
             <?php echo "value='".$rs["num_doc"]."'" ?>
           >
          	 <label for="num_doc">Nº Documento</label>
        </div>
		</div>
      </div>

      <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s12 m6 l6">
          <input name="direccion_re" type="text" class="validate"
          <?php echo "value='".utf8_encode($rs["direccion_re"])."'" ?>
          >
          <label for="direccion_re">Direcciòn</label>
        </div>
        <div class="input-field col s12 m6 l6">
        	<select name="pais_re"
          >
        		  <?php echo " <option value='".$rs["pais_re"]."' selected>".$rs["pais_re"]."</option>" ?>
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
        </div>
        </div>
      </div>
	
	
	<div class="row">
	<div class="col s12 m12 l8 offset-l2">
		   <div class="input-field col s12">
		          <input name="email_re" type="email" class="validate"
              <?php echo "value='".$rs["email_re"]."'" ?>
              >
		          <label for="email" data-error="Correo Invalido" data-success="Correo Validado">Correo</label>
		    </div>
		    </div>

	</div>
     <h6 align="center"> * Presiona Enviar para guardar los cambios realizados</h6>
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
    	</form>
    	</div>
	</section>