<?php 
	
	//echo "<tr>";
// $archivoLog = "/Users/JRodriguez/toolkits/rna/cifar/cf/cifar.log";
	$archivoLog = "data/red/mi_red.log";


@$contenido = file_get_contents($archivoLog);

$file = fopen($archivoLog, "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
?>