<?php function listar_archivos($carpeta){
    if(is_dir($carpeta)){
        if($dir = opendir($carpeta)){
            while(($archivo = readdir($dir)) !== false){
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
                ?>
                <div class="col-md-3">
                  <div class="update-nag" style="width:280px !important;">
                    <div class="update-split update-primary"><i class="glyphicon glyphicon-folder-open"></i></div>
                    <div class="update-text"><a href="<?php echo $carpeta. $archivo; ?>" target="_new"><?php echo $archivo; ?></a>
                     <span class="label label-info pull-right"><?php echo ($totalfiles); ?></span></div>
                  </div>
                </div>
                <?php
                }
            }
            closedir($dir);
        }
    }
} ?>

<!-- <table class="highchart" data-graph-container-before="1"  style="display: none;" data-graph-type="line" data-graph-datalabels-enabled="1" data-graph-datalabels-align="right">
 -->
<table class="highchart" data-graph-container-before="1" data-graph-type="line" style="display:none" data-graph-xaxis-end-on-tick="1">
  <caption>Evaluación Red Neuronal</caption>
  <thead>
    <tr>

      <td>Iteracion</td>
      <td>Error Entrenamiento</td>
      
      <td>Error Prueba</td>

    </tr>
  </thead>
  <tbody id="datared">
<tr>
  <td>1</td>
	<?php include_once("procesar_log.php"); ?>
  </tbody>
</table>

<div class="row">
<br><br>
<div class="alert alert-success" role="alert">Archivos Red</div>
<?php 
 
 echo listar_archivos("data/red/");
 ?>
</div>