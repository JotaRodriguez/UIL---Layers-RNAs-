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

	<style>
		.CodeMirror {
		    border-top: 1px solid #dddddd; 
		    border-bottom: 1px solid #dddddd;
		    border-right: 1px solid #dddddd;
		    height: 500px !important;
		    width:  99% !important;
		}

.ui-group-buttons .or{position:relative;float:left;width:.3em;height:1.3em;z-index:3;font-size:12px}
.ui-group-buttons .or:before{position:absolute;top:50%;left:50%;content:'or';background-color:#5a5a5a;margin-top:-.1em;margin-left:-.9em;width:1.8em;height:1.8em;line-height:1.55;color:#fff;font-style:normal;font-weight:400;text-align:center;border-radius:500px;-webkit-box-shadow:0 0 0 1px rgba(0,0,0,0.1);box-shadow:0 0 0 1px rgba(0,0,0,0.1);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box}
.ui-group-buttons .or:after{position:absolute;top:0;left:0;content:' ';width:.3em;height:2.84em;background-color:rgba(0,0,0,0);border-top:.6em solid #5a5a5a;border-bottom:.6em solid #5a5a5a}
.ui-group-buttons .or.or-lg{height:1.3em;font-size:16px}
.ui-group-buttons .or.or-lg:after{height:2.85em}
.ui-group-buttons .or.or-sm{height:1em}
.ui-group-buttons .or.or-sm:after{height:2.5em}
.ui-group-buttons .or.or-xs{height:.25em}
.ui-group-buttons .or.or-xs:after{height:1.84em;z-index:-1000}
.ui-group-buttons{display:inline-block;vertical-align:middle}
.ui-group-buttons:after{content:".";display:block;height:0;clear:both;visibility:hidden}
.ui-group-buttons .btn{float:left;border-radius:0}
.ui-group-buttons .btn:first-child{margin-left:0;border-top-left-radius:.25em;border-bottom-left-radius:.25em;padding-right:15px}
.ui-group-buttons .btn:last-child{border-top-right-radius:.25em;border-bottom-right-radius:.25em;padding-left:15px}

	</style>
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