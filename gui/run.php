<?php //Ejemplo aprenderaprogramar.com, archivo escribir.php

unlink('data/red/red.net');

$contenido = $_POST['codered'];
$archivo = fopen('data/red/red.net','a');
fputs($archivo,$contenido);
fclose($archivo);


shell_exec('chmod +x run.sh');



shell_exec('./run.sh &');



echo "ejecutando red";

?>