<script>
	$(document).ready(function() {
	$('table.highchart').highchartTable();
	});

	var datos;

	<?php 

		if ($_GET['mod']=='comportamiento') {
	?>
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

	}, 30000)


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
	<?php
			# code...
		}


	 ?>


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
	


	function crear(){
		var nameProject;
		nameProject = $("#nameprj").val();
		alert("Se ha creado el Proyecto, se redireccionara automaticamente para que cargue los datos y configure su red de layer");
		var url = "http://localhost/gui/index.php?mod=newnet&project="+nameProject;
		window.top.location.href = url;
	}

	// $("#lanzar").click(function() {
	// 	$.ajax({
	// 		url: 'data/ejecutar.php',
	// 		type: 'POST',
	// 		dataType: 'text',
	// 		data: {param1: 'value1'},
	// 	})
	// 	.always(function(data) {
	// 		console.log(data);
	// 	});
		
	// });

	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
	
</script>