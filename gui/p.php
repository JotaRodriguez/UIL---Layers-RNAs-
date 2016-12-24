<?php

echo "...\n";
echo "<pre>";
 	 $cmd ="/prueba/rna/Layers/src/layers /prueba/data/red/red.net 2>&1" ;
 	 //$cmd ="ls -lart"; 
 	 $cmd = '/bin/bash -c "/prueba/rna/Layers/src/layers /prueba/data/red/red.net 2>&1 "';
	$result= shell_exec (  $cmd );
	echo $result;
echo "\n***";
?>