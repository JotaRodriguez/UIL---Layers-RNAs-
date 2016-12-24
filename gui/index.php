<?php 
	// $cmd ="//anaconda/bin/python run.py" ;
	//  $cmd ="/Users/JRodriguez/toolkits/rna/Layers/src/layers /Applications/XAMPP/xamppfiles/htdocs/gui/data/red/red.net " ;
	// $result= shell_exec (  $cmd );
	// echo $result;



 	error_reporting(E_ALL ^ E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/prism.css">
	<link rel="stylesheet" href="js/build/xcharts.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>GUI LAYERS</title>

</head>
<body>
	<?php include_once("partsui/nav.php"); ?>
	<div style="height: 60px;"></div>
	<div class="row">
	<div class="col-lg-5" style="margin: 10px;">
		<?php include_once("partsui/gui.php"); ?>
	</div>
	<div class="col-lg-6 container" style="padding: 20px;">		
		<?php 
			if ($_GET['mod']=='newnet') {
				include_once("partsui/interfaz.php");
			}
		 ?>
		<div class="row">
			
				<?php 
				if ($_GET['mod']=='histogram') {
					?><div id="myDiv"></div><?php
				}elseif ($_GET['mod']=='comportamiento') {
			
					include_once("partsui/comportamiento.php");
				}elseif($_GET['mod']=='logs'){
					include_once("partsui/log.php");
				}

			 	?>
		</div>
	</div>

	</div>

	<?php include_once("partsui/newprj.php"); ?>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/highcharts.js"></script>
	<script src="js/jquery.highchartTable-min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/prism.js"></script>	
	<?php include_once("partsui/app.js.php"); ?>

	<script>
	setInterval(function(){ $.ajax({
			url: 'procesar_log_terminal.php',
			type: 'POST',
			dataType: 'text',
			data: {param1: 'term'},
		})
		.always(function(data) {
			$("#log-text").empty();
			$("#log-text").append(data);

			$('.log-text').sticky({
				speed: 0 // The scroll animation speed
			});
					
		}); }, 1000);



	</script>


</body>
</html>