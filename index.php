<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="" src="css/bootstrap.min.css"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<style>
		.imagen1{
			border-radius: 50%;
		}
		.imagen{
			border-radius: 50%;
			width: 120px;
			height: 120px;
			border-style: solid;
			border-width: 12px;
			border-color: red;

		}
		.button{
			display: inline-block;
			height: 54px;
			width: 174px;
			text-align: center;
			border: solid 2px #452b78;
			background: transparent;
			}
			.button a
{
	display: block;
	font-family: 'Roboto', sans-serif;
	font-size: 14px;
	font-weight: 700;
	line-height: 50px;
	text-transform: uppercase;
	color: #452b78;
}
.newsletter_submit_button
{
	cursor: pointer;
	text-transform: uppercase;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: 700;
}
.newsletter_submit_button:hover
{
	background: #452b78;
}
.newsletter_submit_button:focus
{
	outline: none;
	border: none;
}
	</style>
	<title></title>
</head>
<body>
	<!--
	<?php 
		for($i=1;$i<29;$i++){
			echo "<div class=\"imagen1\"><img src=\"img/Fotos/$i.jpg\" class=\"imagen\"/></div>";
		}


	 ?>-->
	 <!--<div class="row">
		<div class="col-sm-4 col-md-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div><div class="col-sm-4 col-md-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>
	 </div>-->

	 <div class="container" id="content">
	 	<div class="row">
	 		<div class="col-md-4"></div>
	 		<div class="col-md-4">
	 			<div class="col-md-12 text-center"></div>
	 				<img src="img/logo.png" alt="">
	 		</div>
	 		<div class="col-md-12">
	 				<form action="valida.php" method="GET">
	 					<div class="form-group">
	 						<label for="user">Usuario</label>
	 						<input name="usuario" type="text" class="form-control" id="usuario" placeholder="Usuario">
	 					</div>
	 					<div class="form-group">
	 						<label for="pass">Password</label>
	 						<input name="pass" type="password" class="form-control" id="pass" placeholder="Password">
	 					</div>
	 					<div class="col-md-12 text-right">
	 						<button type="submit" class="btn btn-outline-info">Entrar</button>
	 					</div>
	 				</form>
	 		</div>
	 	</div>
	 	<div class="col-md-4"></div>
	 </div>
</body>
</html>