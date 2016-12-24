<?php 
	
	//echo "<tr>";

	@$contenido = file_get_contents("data/red/mi_red.log");

	$contenido =  str_ireplace("Start","",$contenido);
	$contenido =  str_ireplace("tart","",$contenido);

	@$file = fopen("data/red/mi_red.log", "r") or exit("<div class='alert alert-danger' role='alert'>
		<div class='glyphicon glyphicon-remove-sign'></div> Unable to open file!</div>");
	//Output a line of the file until the end is reached
	$g = 0;
	$c=1;
	while(!feof($file))
	{

	$cadena =  fgets($file);
	$subcadena = "f "; 
	$posicionsubcadena = strpos ($cadena, $subcadena); 
	$dominio = substr ($cadena, ($posicionsubcadena+1)); 
	 $cont =  $dominio; // leonpurpura.com
	//echo $cont . "<br>";

	$m0 =  str_replace ( "tart" ,"" , $cont );
	$cont = $m0;

	$m1 =  str_replace ( " " ,"-" , $cont );
	$m1_1 =  str_replace ( "%-" ,"]" , $m1 );
	$m1_2 =  str_replace ( "--" ,"[" , $m1_1 );

	$cadena = $m1_2;
	
	$subcadena = "["; 
	// localicamos en que posici�n se haya la $subcadena, en nuestro caso la posicion es "7"
	$posicionsubcadena = strpos ($cadena, $subcadena); 
	// eliminamos los caracteres desde $subcadena hacia la izq, y le sumamos 1 para borrar tambien el @ en este caso
	$dominio = substr ($cadena, ($posicionsubcadena+1)); 
	$cont =  $dominio; // leonpurpura.com

	$m1_3 =  str_replace ( "]-CrossEnt=-" ,"/" , $cont );
	// echo $m1_3 . "<br>";

	$cadena22 = $m1_3;
	
	$array22 = explode("/", $cadena22);

	$newValues=array_filter($array22, "strlen");

	if (@$newValues[0] !="") {
	
	$g++;

	if ($g > 2) {
		$c+=1;
		echo "</tr><tr><td>".$c."</td>";
		$g=1;
	}

	echo " <td>" . @$newValues[0] . "</td>";

	}
	
	}
	echo "</tr>";

	fclose($file);

 ?>
