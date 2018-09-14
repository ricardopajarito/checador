<?php
	$user=isset($_REQUEST['usuario'])?$_REQUEST['usuario']:'';
	$pass=isset($_REQUEST['pass'])?$_REQUEST['pass']:'';

	if($user=="juan" && $pass=="123"){
		header("Location: selectUser.php");
	}else{
		header("Location: index.php");
	}

?>