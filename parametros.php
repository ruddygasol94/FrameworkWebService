<?php

	if (isset($_POST['port']) && isset($_POST['host']) && isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['dbname'])){
		$port = $_POST['port'];
		$host = $_POST['host'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$dbname = $_POST['dbname'];


		//escribe archivo paraConexion.php
		$file = fopen('config/paraConexion.php', 'w');

		fwrite($file, '<?php'.PHP_EOL);
		fwrite($file, "\t\$port = '".$port."';".PHP_EOL);
		fwrite($file, "\t\$host = '".$host."';".PHP_EOL);
		fwrite($file, "\t\$user = '".$user."';".PHP_EOL);
		fwrite($file, "\t\$pass = '".$pass."';".PHP_EOL);
		fwrite($file, "\t\$dbname = '".$dbname."';".PHP_EOL);
		fwrite($file, PHP_EOL);
		fwrite($file, "?>".PHP_EOL);

		fclose($file);

		header('location: prueba.php');

	}
?>