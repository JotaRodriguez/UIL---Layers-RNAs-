
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/prism.css">




	<title>GUI LAYERS</title>
</head>
<body>
	
	<div class="row">
	<div class="col-lg-5" style="margin: 10px;">
		<?php include_once("gui.php"); ?>
	</div>
	<div class="col-lg-6 container" style="padding: 20px;">		
		<?php include_once("interfaz.php"); ?>
		<div class="row">
			<?php include_once("graph.php"); ?>
		</div>
	</div>

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="https://code.highcharts.com/stock/highstock.js"></script>
	<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>

	<script src="js/bootstrap.js"></script>
	<script src="js/prism.js"></script>
	<script>


	// $("#lanzar").click(function(){
	// 	    $.post("run.php", function(data, status){
	// 	        alert(data);
	// 	    });
	// 	});

		$("#lanzar").click(function(){
			$.post( "run.php",{codered:$("#codigored").html()},
				function(respuesta){
					alert(respuesta);
					//respuesta es el resultado que devuelve nuestro archivo que recibe las variables
			});
		});


		$('input[type=file]').change(function () {
		    
		    var url = window.location.pathname;

		    console.log(this.files[0].mozFullPath);
		  alert(this.files[0].mozFullPath);
		});

	// 	$("#logProceso").load("data/mnist_red.log");


	// 	$(function () {

	//     $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=aapl-c.json&callback=?', function (data) {
	//         // Create the chart
	//         Highcharts.stockChart('container', {


	//             rangeSelector: {
	//                 selected: 1
	//             },

	//             title: {
	//                 text: 'Red Neuronal'
	//             },

	//             series: [{
	//                 name: 'AAPL',
	//                 data: data,
	//                 tooltip: {
	//                     valueDecimals: 2
	//                 }
	//             }]
	//         });
	//     });

	// });
	// 
	// 




	var datos; 
	datos =  $.getJSON('http://localhost/gui/procesar_log.php').done(function(response) {
   		 console.log(response); //here's your response
	   });




	
	$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Entrenamiento Red Neuronal'
        },
        subtitle: {
            text: 'By: Jhonatan Córdoba Rodríguez'
        },
        xAxis: {
            categories: ['']
        },
        yAxis: {
            title: {
                text: 'Error Evaluación '
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Error Entrenamiento',
            data:  datos.responseText
        }, {
            name: 'Error Test',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});



	</script>
	<!-- <script src="http://prismjs.com/plugins/line-numbers/prism-line-numbers.js"></script> -->

</body>
</html>