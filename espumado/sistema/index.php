<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Prueb Espumados</title>
</head>
<body>
	<?php 
	include "includes/header.php"; 
	include "../conexion.php";

	$query_dash  = mysqli_query($conection, "CALL dataDashboard();");
	$result_dash  = mysqli_num_rows($query_dash);
	if($result_dash > 0){
		$data_dash = mysqli_fetch_assoc($query_dash);
		mysqli_close($conection);
	}

	

	?>
	<section id="container">
		<div class="divcontainer">
			<div>
				<h1 class="titlePanelcontrol"> Panel de Control</h1>
			</div>
			<div class="dashboard">
				<a href="lista_usuarios.php">
				<i class="fas fa-users"></i>
				<p>
					<strong>Lista de Usuarios</strong><br>
					<span><?= $data_dash['usuarios'] ?></span>
				</p>
				</a>

			</div>
		</div>
		<br>
		<br>

		<div class="divinfosistema">
		<div>
				<h1 class="titlePanelcontrol"> Configuracion</h1>
			</div>
			<div class="containerPerfil">
				<div class="containerDataUser">
					<div class="logoUser">
						<img src="img/logoUser.png" >
					</div>
					<div class="divDataUser">
						<h4>Informacion Personal</h4>
						<div>
							<label>Nombre</label> <span><?=$_SESSION['nombre'];?></span>
						</div>

						<div>
							<label>Correo</label> <span><?=$_SESSION['email'];?></span>
						</div>

						<h4>Datos Usuario</h4>
						<div>

							<label>Rol</label> <span><?=$_SESSION['rol_name'];?></span>
						</div>

						<div>
							<label>Usuario</label> <span><?=$_SESSION['user'];?></span>
						</div>

						


					</div>
				</div>
				
			</div>
		</div>


	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>