

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
	<title>GUI LAYERS</title>

</head>
<body>
	<?php include_once("nav.php"); ?>
	<div style="height: 60px;"></div>
	<div class="row">
	<div class="col-lg-5" style="margin: 10px;">
		<?php include_once("gui.php"); ?>
	</div>
	<div class="col-lg-6 container" style="padding: 20px;">		
		<?php 
			if ($_GET['mod']=='newnet') {
				include_once("interfaz.php");
			}
		 ?>
		<div class="row">
			
				<?php 
				if ($_GET['mod']=='histogram') {
					?><div id="myDiv"></div><?php
				}elseif ($_GET['mod']=='comportamiento') {
			
					include_once("comportamiento.php");
				}

			 	?>
		</div>
	</div>

	</div>
		<!-- <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> -->


		<script src="js/jquery.min.js"></script>

		<script type="text/javascript" src="js/highcharts.js"></script>
		<script src="js/jquery.highchartTable-min.js"></script>

		<!-- <script type="text/javascript" src="js/exporting.js"></script>
		<script type="text/javascript" src="js/comportamiento.js"></script>

         		<script src="https://cdn.plot.ly/plotly-latest.min.js"></script> -->


	<script src="js/bootstrap.js"></script>
	<script src="js/prism.js"></script>
	


	<script>

	$(document).ready(function() {
	$('table.highchart').highchartTable();
	});

	var datos;

	setInterval(function(){ 
		$.ajax({
			url: 'procesar_log.php',
			type: 'post',
			dataType: 'html',
			data: {param1: 'value1'},
		}).fail(function() {
		console.log("error");
		})
		.always(function(data) {
			$("#datared").empty();
			datos = data;
			$("#datared").html(data);
			
			window.location.href=window.location.href
		});

	}, 5000)


	// ;setInterval(function(){ 
	// 	$.ajax({
	// 		url: 'procesar_log.php',
	// 		type: 'post',
	// 		dataType: 'html',
	// 		data: {param1: 'value1'},
	// 	})
	// 	.always(function(data) {
	// 		$("#graff").html("");

	// 		console.log(data);
	// 		$("#graff").html(data);
			
	// 	});

	// }, 4000);

	
	$("#datared").html(datos);


	$.ajax({
		url: '/path/to/file',
		type: 'default GET (Other values: POST)',
		dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		data: {param1: 'value1'},
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	


	
	
	</script>


</body>
</html>