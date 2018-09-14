<?php 
include "sql.php";
include "usuario.php";

$id=isset($_REQUEST['id'])?$_REQUEST['id']:'0';
$tipo=isset($_REQUEST['tipo'])?$_REQUEST['tipo']:'';

if($tipo=='1')
{
	$u=new usuario();
	$u->buscar($id);
}else{
	
}



 ?>