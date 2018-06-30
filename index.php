<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
			
			<fieldset id="container">
					<legend>Formulario de Registro</legend>
					<center>
						<form name="register" method="post" action="app/Http/Controllers/Controller.php">
							<p>
								<select class="elegir-gene" name="genero" required>
									<option class="text-form" value="masculino">Masculino</option>
									<option class="text-form" value="femenino">Femenino</option>
									<option class="text-form" value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input class="text-form" type="text" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input class="text-form" type="email" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input  class="text-form"type="password" name="password" placeholder="Contraseña.." required>
							</p>
							<p>
								<input class="text-form" type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
							</p>
							<p>
								<input class="botones" type="submit" name="btn-register" value="Registrar usuario">
								<input class="botones" type="reset" value="Limpiar datos">
							</p>
						</form>
			</fieldset>
			</center>
			<p><a id="registrado" href="http://localhost/WebM/views/front/login.php" >Ya estoy registrado!</a></p>
		</div>
	</div>
</div>

<?php include ('views/front/templates/foot.php'); ?>