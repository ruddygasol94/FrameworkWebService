<?php
	include 'conectar.php';
	include 'crea.php';

	$con = new BaseDatos();

	try{
		$query = $con->prepare("select table_name from information_schema.tables where table_schema = 'public'");
		$query->execute();
		//$con->close_con();
		$data = $query->fetchAll();
		$v_variables = array();
		foreach($data as $a){
			echo '<h3>'.$a['table_name'].'</h3>';
			$consulta = "select column_name, data_type from information_schema.columns where table_name = '".$a['table_name']."'";
			$query = $con->prepare($consulta);
			$query->execute();
			$cols = $query->fetchAll();
			
			foreach ($cols as $key) {
				$nombVariable = strtolower(substr(str_replace('_', '', ucwords($key['column_name'], '_')), 0, 1)). substr(str_replace('_', '', ucwords($key['column_name'], '_')), 1);
				array_push($v_variables, array('column_name' => $nombVariable, 'data_type' => $key['data_type']));
			}
			$crea = new CreaClase();
			$crea->crear($a['table_name'], $v_variables);
			echo '<hr>';
		}
	} catch (PDOException $e){
		echo $e->getMessage();
	}
?>