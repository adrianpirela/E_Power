<?php
$email_re=$_GET['email_re'];
?>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>E-Powe Rent a Car</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<section>
	<div class="container">
		<form class="col s6" action="validaru2.php" method="post">
    <br>
		<h4 class="center-align">Recuperacion de Contraseña</h4>
    <br>
			<div class="divider"></div>
      <br>
      <h5 class="center-align">Ingrese su nueva contraseña.</h5>
			<br>
      <br>
      <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s12 m12 l12">
          <input name="contra1_re" type="password" class="validate">
          <label for="contra1_re">Contraseña</label>
        </div>
      </div>
	  </div>
          <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="input-field col s12 m12 l12">
          <input name="contra2_re" type="password" class="validate">
          <label for="contra2_re">Validar Contraseña</label>
        </div>
      </div>
    </div>
      <input type="hidden" class="validate" name="email_re" id="email_re" value="<?php echo $email_re ?>" required>

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
