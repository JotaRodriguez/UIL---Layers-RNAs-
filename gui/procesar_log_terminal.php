<?php 
	
	//echo "<tr>";

@$contenido = file_get_contents("data/red/mi_red.log");

$file = fopen("data/red/mi_red.log", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
?>