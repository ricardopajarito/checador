<?php
	include "clases/sql.php";
	include "clases/usuario.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
	body{
    background-color: #f0f1f2;
	}
		.foto{
			border-radius: 50%;
			width: 48px;
		}
		.fondo
		{
			background-color: white;
		}
		.logo{
			background-color: 	#1b2e47;
		}
		.titulo{
			
			background-color: #23b1e5;
			color:#1b2e47;
		}
		.titulo .row{
			height: 153px;
		}
	</style>
</head>
<body>
	<div class="container" id="content" style=" min-height: 660px; background-color: white;">
		<header>
			<div class="row" >
				<div class="col-auto logo"><img src="img/banner.png" alt=""></div>
				<div class="col titulo">
					<div class="row ">
						<div class="col align-self-center text-center"><h2>Control de Personal</h2></div>
					</div>
				</div>
			</div>
		</header>
		<div class="row " style="padding-top: 10px;">
			<div class="col-auto">Usuario</div>
			<div class="col text-right">
				<button type="button" class="btn btn-primary" onclick="salir()">Salir</button>
				<button type="button" class="btn btn-primary" onclick="selected()">Actualizar</button>
			</div>
		</div>
		<div class="row"><br></div>
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?php 
					$usuario = new usuario();
					$usuario->muestra();
				?>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<script>
		function selected()
		{
			var user=$("input[type='radio']:checked").val();
			if(user===undefined){
				alert("selecciona un usuario");
			}else{
				location.href="updatePassword.php?id="+user+"&ran="+Math.random();
			}
		}
		function salir()
		{
			location.href="salir.php?ran="+Math.random();
		}

	</script>
</body>
</html>