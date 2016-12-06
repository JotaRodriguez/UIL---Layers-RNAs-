
<?php 
	
	
	$contenido = file_get_contents("p.net");

	$contenido = str_replace("{{hilos}}","4",$contenido) ;
	$contenido = str_replace("{{batch}}","100",$contenido);
	$contenido = str_replace("{{nombre_log_red}}","mi_red",$contenido);
	$contenido = str_replace("{{nombre_red}}","mired",$contenido);
	$contenido = str_replace("{{tipo_datos}}","binary",$contenido);
	$contenido = str_replace("{{mu}}","0.01",$contenido);
	$contenido = str_replace("{{numero_training}}","1000",$contenido);
	$contenido = str_replace("{{drop}}","0.21",$contenido);
	$contenido = str_replace("{{bn}}","1.0",$contenido);
	$contenido = str_replace("{{noiser}}","0.5",$contenido);
	$contenido = str_replace("{{noisesd}}","0.1",$contenido);
	$contenido = str_replace("{{numnodes}}","0.1",$contenido);
	$contenido = str_replace("{{capa_salida}}","classification",$contenido);
	$contenido = str_replace("{{datos_train}}","D1",$contenido);
	$contenido = str_replace("{{datos_test}}","D2",$contenido);

	
 ?>

 <pre   style="width: 515px; height: 700px;    overflow: scroll;"">
 	<code >
 		<?php echo $contenido; ?>
 	</code>
 	
 </pre>