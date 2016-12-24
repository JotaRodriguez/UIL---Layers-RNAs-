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


	<style>
		.update-nag{
		  display: inline-block;
		  font-size: 14px;
		  text-align: left;
		  background-color: #fff;
		  height: 40px;
		  -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.2);
		  box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		  margin-bottom: 10px;
		}

		.update-nag:hover{
		    cursor: pointer;
		    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.4);
		  box-shadow: 0 1px 1px 0 rgba(0,0,0,.3);
		}

		.update-nag > .update-split{
		  background: #337ab7;
		  width: 33px;
		  float: left;
		  color: #fff!important;
		  height: 100%;
		  text-align: center;
		}

		.update-nag > .update-split > .glyphicon{
		  position:relative;
		  top: calc(50% - 9px)!important; /* 50% - 3/4 of icon height */
		}
		.update-nag > .update-split.update-success{
		  background: #5cb85c!important;
		}

		.update-nag > .update-split.update-danger{
		  background: #d9534f!important;
		}

		.update-nag > .update-split.update-info{
		  background: #5bc0de!important;
		}

		.update-nag > .update-text{
		  line-height: 19px;
		  padding-top: 11px;
		  padding-left: 45px;
		  padding-right: 20px;
		}

	</style>
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
				}elseif($_GET['mod']=='logs'){
					include_once("comportamiento.php");
				}

			 	?>
		</div>
	</div>

	</div>

	<?php include_once("newprj.php"); ?>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/highcharts.js"></script>
	<script src="js/jquery.highchartTable-min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/prism.js"></script>	
	<?php include_once("app.js.php"); ?>


</body>
</html>