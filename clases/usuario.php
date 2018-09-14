<?php
	class usuario{
		public $sql;

		public function __construct(){
			$this->sql = new sql();
		}
		public function muestra(){
			$query = "select id1, isnull (id2,0) id2, KeyEmployee, Name1, Name2, LastName1, LastName2 from catEmployee c left join usuario u on c.KeyEmployee=u.id2";

			$result = $this->sql->select($query);
			echo '<table class="table table-hover">
					<thead>
						<tr>
							<th>Seleccion</th>
							<th>Foto</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody>';
			while($row = sqlsrv_fetch_object($result)){
				echo '<tr>
							<td>';
				echo '<input type="radio" name="radio" id="radio1" value="'.$row->KeyEmployee.'">';
				echo '</td>
							<td>';
				echo "<img src=\"img/Fotos/".$row->id1.".jpg\" style=\" width: 75px; border-radius: 50%;\">"."</td>";
				echo '<td>';
				echo $row->Name1." ".$row->Name2." ".$row->LastName1." ".$row->LastName2;
				echo '</td></tr>';
			}
			echo '</tbody>
				</table>';
		}
		public function foto($id){
			$query="select isnull (id1,0) id1, isnull(id2,0) id2, KeyEmployee, Name1, Name2, LastName1, LastName2 from catEmployee c left join usuario u on c.KeyEmployee=u.id2 where c.KeyEmployee ='$id'";
			$result=$this->sql->select($query);
			while($row=sqlsrv_fetch_object($result)){
				return $row->id1;
			}
		}
		public function update($id,$user,$pass){
			$query="update usuario set usuario='$user', pass='$pass' where id2='id'";
			$result=$this->sql->select($query);
			return $result;
		}

		public function buscar($id){
			$query = "select id1, isnull (id2,0) id2, KeyEmployee, Name1, Name2, LastName1, LastName2 from catEmployee c left join usuario u on c.KeyEmployee=u.id2
				where Name1 like '%$id%'";

			$result = $this->sql->select($query);
			echo '<table class="table table-hover">
					<thead>
						<tr>
							<th>Foto</th>
							<th>Nombre</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
			while($row = sqlsrv_fetch_object($result)){
				echo '<tr><td>';
				echo "<img src=\"img/Fotos/".$row->id1.".jpg\" style=\" width: 75px; border-radius: 50%;\">"."</td>";
				echo '<td>';
				echo $row->Name1." ".$row->Name2." ".$row->LastName1." ".$row->LastName2;
				echo '</tr>';
				echo '<td>';
			echo '<button type="button" class="btn btn-primary" onclick="add(\''.$row->KeyEmployee.'\')">add</button>';
			}
			echo '</tbody>
				</table>';
		}
		
}
	//$usuario = new usuario();
	//$usuario->muestra();

?>