<?php
include "clases/sql.php";
include "clases/usuario.php";
$id=isset($_REQUEST['id'])?$_REQUEST['id']:0;
$usuario=new usuario();
$img=$usuario->foto($id);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
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
				<button type="button" class="btn btn-primary">Salir</button>
				<button type="button" class="btn btn-primary" onclick="selected()">Actualizar</button>
			</div>
		</div>
	<div class="container" id="content">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="col-md-12 text-center">
					
				</div>
				<div class="col-md-12">
					<form action="valida.php" method="GET">
						<div class="form-group text-center">
							<img src="img/Fotos/<?php echo $img; ?>.jpg" style="width:75px; border-radius: 50px;"
						</div>
						<div class="form-group">
							<label for="user">Usuario: </label>
							<input type="text" class="form-control" id="usuario" placeholder="Nombre">
						</div>
						<div class="form-group">
							<label for="user">Contraseña: </label>
							<input type="password" class="form-control" id="pass1" placeholder="Contraseña">
						</div>
						<div class="form-group">
							<label for="user">Verificar contraseña</label>
							<input type="password" class="form-control" id="pass2" placeholder="Verifique su contraseña">
						</div>
						<div class="col-md-12 text-right">
							<button type="button" class="btn btn-default" onclick="validaUsr()">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	<div class="modal fade" role="dialog" id="modalID">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-left" >Información</h4>
				</div>
				<div class="modal-body">
					<p id="texto"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismmiss="modal">Aceptar</button>
				</div>
			</div>			
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!--<script src="js/jquery-3.3.1.slim.min.js"></script>-->
	<script src="js/bootstrap.min.js"></script>
	<script>
		function validaUsr(){
			var user=$("#usuario").val();
			var pass1=$("#pass1").val();
			var pass2=$("#pass2").val();
			var error="";
			if(user==""){
				error="Falta el usuario<br>";
			}
			if (pass1=="") {
				error="Falta el password<br>";
			}
			if(pass1!=pass2){
				alert("La contraseña no es correcta");
			}
			if(error==""){
				location.href="otrosUser.php?id="+id+"&user="+user+"&pass="+pass1;
			}else{
				$("#texto").html(error);
				$("#modalID").modal("show");
			}
		}
	</script>
</body>
</html>	