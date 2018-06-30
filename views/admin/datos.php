<?php

if(isset($_GET['datos'])){

	session_start();
}

include('templates/head.php');

?>


				<figure>
					<?php include('partials/genero.php') ?>
			

		
			<h2>Bienvenid@: <i>

				<?php 
				if(isset($_SESSION['usuario'])){
					echo $_SESSION['usuario'];
				}
				?>
					
				</i></h2>
		<div class="col-12">
			<?php include('forms/form_datos.php'); ?>
		</div>

<?php include ('templates/foot.php'); ?>