<?php

class creaClase
{
	public function crear($p_nombre, array $p_atributos)
	{
		//echo $p_atributos['column_name'][0];
		$file = fopen('modelos/c_'.$p_nombre.'.php', 'w');

		fwrite($file, '<?php'.PHP_EOL);
		fwrite($file, PHP_EOL);
		fwrite($file, 'class '.$p_nombre.PHP_EOL);
		fwrite($file, '{'.PHP_EOL);


		foreach ($p_atributos as $key) {
			echo $key['column_name'];
		}
		
		foreach ($p_atributos as $key) {
			fwrite($file, "\tprivate $".$key['column_name'].';'.PHP_EOL);
		}
		fwrite($file, PHP_EOL);

		foreach ($p_atributos as $key) {
			$normal = strtoupper(substr($key['column_name'], 0, 1)).substr($key['column_name'], 1);
			fwrite($file, "\tpublic function set".$normal."(\$p_".$key['column_name'].')'.PHP_EOL);
			fwrite($file, "\t{".PHP_EOL);
			fwrite($file, "\t\t\$this->".$key['column_name']." = \$p_".$normal.';'.PHP_EOL);
			fwrite($file, "\t}".PHP_EOL);
			fwrite($file, PHP_EOL);

			fwrite($file, "\tpublic function get".$normal."()".PHP_EOL);
			fwrite($file, "\t{".PHP_EOL);
			fwrite($file, "\t\treturn \$this->".$key['column_name'].';'.PHP_EOL);
			fwrite($file, "\t}".PHP_EOL);
			fwrite($file, PHP_EOL);
		}
		fwrite($file, '}'.PHP_EOL);
		fwrite($file, '?>'.PHP_EOL);
		fclose($file);
	}
}
?>