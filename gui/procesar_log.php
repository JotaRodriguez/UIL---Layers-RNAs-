<?php 

	$contenido = file_get_contents("data/mnist_red.log");

	
	
	$contenido =  str_ireplace("Start","",$contenido);
	$contenido =  str_ireplace("tart","",$contenido);

	$file = fopen("data/mnist_red.log", "r") or exit("Unable to open file!");
	//Output a line of the file until the end is reached
	$g = 0;
	
	while(!feof($file))
	{

	// if (fgets($file) == "Start" or fgets($file) == "tart") {}

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


	// if ($g==0 or $g == sizeof($newValues)-1) {
	// 	echo  @$newValues[0];	
		
	// }else{
	// 	echo "," . @$newValues[0];	
	// }

	$g++;


	//echo @$newValues[0];	
	
	

	//print_r($newValues);
	
	//echo "->" . $newValues[0] . "<br>";
	//echo $array22[0]."<br>";
	

	// echo @$datos[1];
	//echo '<pre>',print_r(@$datos,1),'</pre>';
	



	//_____________________________
	

	

	
	}
	fclose($file);

	//echo @$newValues[0];	


// echo "------" . $g."---";

		

 ?>