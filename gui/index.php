

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
<body onload="myFunction()">
	
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

		<!-- <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/highcharts.js"></script>
		<script type="text/javascript" src="js/exporting.js"></script>
 -->

         <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

	<!--  -->
	  <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->

	<!-- <script src="https://code.highcharts.com/stock/highstock.js"></script>
	<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
 -->
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
	var str;
	var temp;
	var miMatriz;
	var x = [];


	var x1 = [];
	var y1 = [];
	var y2 = [];


	// datos =  $.getJSON('http://localhost/gui/procesar_log.php').done(function(response) {
 //   		 console.log(response); //here's your response
	//    });


	function myFunction() {
	//setTimeout(function(){ leerData(); }, 1000);
	leerData();
	}


	function leerData(){


			$.ajax({
				url: 'procesar_log.php',
				type: 'GET',
				dataType: 'text',
				data: {param1: 'leer'},
			})
			.always(function(data) {

				datos=data;

				str = datos;
				temp = new Array();
				temp = str.split(",");

				temp.pop();

				console.log(temp);
				//
				

				//Lo convierto a objeto
				var jObject={};
				for(i in temp)
				{
				jObject[i] = temp[i];
				}

				//console.log(jObject);



				 jObject= JSON.stringify(jObject);
				    $.ajax({
				            type:'post',
				             cache:false,
				             url:"js.php",
				            data:{jObject:  jObject},
				            success:function(server){
				            // alert(server);//cuando reciva la respuesta lo imprimo

				               }
				     });
			    


							

			});


		return temp;

	}
	



for (var i = 1; i < 500; i++) 
{
	k=Math.random();
	x1.push(k);
	y1.push(Math.random() + 1);
	y2.push(Math.random() + 2);
}
var trace1 = {
  x: x1,
  y: y1,
  type: "histogram",
   marker: {
    color: 'pink',
	},
};
var trace2 = {
  x: x1,
  y: y2,
  type: "histogram",
	marker: {
    color: 'lightblue',
	},
};
var data = [trace1, trace2];
var layout = {barmode: "stack"};
Plotly.newPlot("myDiv", data, layout);



// for (var i = 0; i < 500; i ++) {
// 	x[i] = Math.random();
// }

// var data = [
//   {
//     x: ["11.95", "4.46", "5.85", "3.26", "4.72", "2.96", "3.95", "2.62", "3.51", "2.35", "3.22", "2.30", "2.93", "2.15", "2.68", "2.04", "2.66", "2.09", "2.46", "1.84", "2.28", "1.93", "2.23", "1.80", "2.06", "1.84", "2.02", "1.82", "1.96", "1.85", "1.80", "1.86", "1.74", "1.88", "1.75", "1.65", "1.69", "1.66", "1.67", "1.64", "1.61", "1.60", "1.64", "1.57", "1.52", "1.59", "1.39", "1.50", "1.29", "1.56", "1.32", "1.58", "1.36", "1.61", "1.31", "1.57", "1.21", "1.58", "1.27", "1.54", "1.21", "1.53", "1.19", "1.49", "1.17", "1.53", "1.21", "1.49", "1.06", "1.45", "1.11", "1.46", "1.01", "1.47", "1.02", "1.46", "1.00", "1.47", "1.02", "1.47", "0.96", "1.38", "0.92", "1.36", "0.94", "1.39"],
//     type: 'histogram',
// 	  marker: {
//     color: 'rgba(100,250,100,0.7)',
// 	},
//   }
// ];

// Plotly.newPlot('myDiv', data);


				
		</script>



	<!-- <script src="http://prismjs.com/plugins/line-numbers/prism-line-numbers.js"></script> -->

</body>
</html>