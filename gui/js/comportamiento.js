
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaLineal', 	// Le doy el nombre a la gráfica
				defaultSeriesType: 'line'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Datos de las Visitas'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'Jarroba.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
				categories: ['Feb12','Mar12','Abr12','May12','Jun12','Jul12','Ago12','Sep12','Oct12','Nov12',
'Dic12','Ene13','Feb13','Mar13','Abr13','May13','Jun13'],
				// Pongo el título para el eje de las 'X'
				title: {
					text: 'Meses'
				}
			},
			yAxis: {
				// Pongo el título para el eje de las 'Y'
				title: {
					text: 'Nº Visitas'
				}
			},
			// Doy formato al la "cajita" que sale al pasar el ratón por encima de la gráfica
			tooltip: {
				enabled: true,
				formatter: function() {
					return '<b>'+ this.series.name +'</b><br/>'+
						this.x +': '+ this.y +' '+this.series.name;
				}
			},
			// Doy opciones a la gráfica
			plotOptions: {
				line: {
					dataLabels: {
						enabled: true
					},
					enableMouseTracking: true
				}
			},
			// Doy los datos de la gráfica para dibujarlas
			series: [{
		                name: 'Visitas',
		                data: [103,474,402,536,1041,270,0,160,2462,3797,3527,4505,8090,7493,7048,11408,10886]
		            },
		            {
		                name: 'Visitantes Únicos',
		                data: [21,278,203,370,810,213,0,134,1991,3122,2870,3655,6400,5818,5581,8529,8261]
		            },
		            {
		                name: 'Páginas Vistas',
		                data: [1064,1648,1040,1076,2012,397,0,325,3732,6067,5226,6482,11503,11937,9751,16061,15643]
		            }],
		});	
	});				
