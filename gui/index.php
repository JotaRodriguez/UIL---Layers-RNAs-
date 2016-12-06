
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
	<script src="js/bootstrap.js"></script>
	<script src="js/prism.js"></script>
	<script>
		$('input[type=file]').change(function () {
		    
		    var url = window.location.pathname;

		    console.log(this.files[0].mozFullPath);
		  alert(this.files[0].mozFullPath);
		});
	</script>
	<!-- <script src="http://prismjs.com/plugins/line-numbers/prism-line-numbers.js"></script> -->

</body>
</html>