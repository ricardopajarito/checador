<?php 
/**
 * 
 */
class sql
{
	public $sql1;

	public function __construct()
	{
		$dbuser='sa';
		$dbpass='';
		$dbhost='MERAKIVENTAS1\COMPAC';
		$basedatos='TASID';

		$info = array('Database' =>$basedatos ,'UID'=>$dbuser, 'PWD'=>$dbpass,"CharacterSet"=>"UTF-8" );
		$this->sql1=sqlsrv_connect($dbhost,$info);
	}
	public function select($sql){
		$result=sqlsrv_query($this->sql1,$sql);
		return $result;
	}
	public function execute($sql){
		$result=sqlsrv_query($this->sql1, $sql);
		return $result;
	}
	public function close(){
		return 0;
	}
}



 ?>