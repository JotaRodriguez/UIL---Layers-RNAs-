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
	<link rel="stylesheet" href="js/build/xcharts.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/default.min.css">
	<link rel="stylesheet" href="css/codemirror.css">
	<link rel="stylesheet" href="css/estilo.css">
	<title>GUI LAYERS</title>

</head>
<body>
	<?php include_once("partsui/nav.php"); ?>
	<div style="height: 60px;"></div>
	<div  style="margin: 20px;">


		<?php 
			$mod = $_GET['mod'];
			switch ($mod) {
				case 'newnet':
					include_once("partsui/interfaz.php");
					break;
				case 'histogram':
					# code...
					break;
				case 'comportamiento':
					include_once("partsui/comportamiento.php");
					break;
				case 'logs':
					include_once("partsui/log.php");
					break;
				case 'editor':
					include_once("partsui/gui.php"); 
					break;
				case 'value':
					# code...
					break;
				case 'value':
					# code...
					break;
				
				default:
					include_once("partsui/gui.php"); 
					break;
			}
		 ?>

	</div>
	


	<?php include_once("partsui/newprj.php"); ?>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/highcharts.js"></script>
	<script src="js/jquery.highchartTable-min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/languages/go.min.js"></script>
	<script src="js/codemirror.js"></script>
	<?php include_once("partsui/app.js.php"); ?>

	<script>

	window.onload = function() {
		var myTextarea = document.getElementById("myCode");
		editor = CodeMirror.fromTextArea(myTextarea, {
		lineNumbers: true,
		 theme: "ambiance",
		});
	};

	$(document).ready(function() {
	  $('pre code').each(function(i, block) {
	    hljs.highlightBlock(block);
	  });
	});

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