
<?php 
	
	
	$contenido = file_get_contents("p.net");

	$contenido = str_replace("{{hilos}}","4",$contenido) ;
	$contenido = str_replace("{{asignacion}}","&#62;",$contenido) ;
	$contenido = str_replace("{{batch}}","100",$contenido);
	$contenido = str_replace("{{nombre_log_red}}","mi_red",$contenido);
	$contenido = str_replace("{{nombre_red}}","mired",$contenido);
	$contenido = str_replace("{{tipo_datos}}","binary",$contenido);
	$contenido = str_replace("{{mu}}","0.01",$contenido);
	$contenido = str_replace("{{numero_training}}","100",$contenido);
	$contenido = str_replace("{{drop}}","0.21",$contenido);
	$contenido = str_replace("{{bn}}","1.0",$contenido);
	$contenido = str_replace("{{noiser}}","0.5",$contenido);
	$contenido = str_replace("{{noisesd}}","0.1",$contenido);
	$contenido = str_replace("{{numnodes}}","1024",$contenido);
	$contenido = str_replace("{{capa_salida}}","classification",$contenido);
	$contenido = str_replace("{{datos_train}}","D1",$contenido);
	$contenido = str_replace("{{datos_test}}","D2",$contenido);

	
 ?>
<!-- 
 <pre  contenteditable="true" style="width: 515px; height: 640px;    overflow: scroll;" id="codigored" name="codigored">
 		<?php echo $contenido; ?>
 	
 </pre> -->

 <!-- <pre><code class="nohighlight">.
var a;
 </code></pre> -->


<div class="ui-group-buttons">
    <a href="javascript:;" class="btn btn-success" role="button"><span class="glyphicon glyphicon-floppy-disk"></span></a>
    <div class="or"></div>
    <a href="javascript:;" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span></a>
</div>

<div class="ui-group-buttons">
    <a href="javascript:;" class="btn btn-success" role="button"><span class="glyphicon glyphicon-ok"></span> Verificar y Correr</a>
    <!-- <div class="or"></div>
    <a href="javascript:;" class="btn btn-default" role="button"><span class="glyphicon glyphicon-remove"></span> Reset</a> -->
</div>

<br>
<br>

 <textarea id="myCode">
 const{
	threads=4
	batch=100
	log="mi_red.log"
}


data {
	D1 [filename="training", binary]	
	D2 [filename="test", binary]
}

network mired {
	data tr D1
	data ts D2

	FI in

	F f1 [numnodes=24]
	FO out [classification]
	in->f1
	f1->out
}

script {
	//Normaliza los datos en cero y uno (0,1)	
	D1.div(255)
	D2.div(255)
	
	//porcentaje del factor de aprendizaje
	mired.mu = 0.01	

	//implementación de ruido
	mired.noiser = 1.0
	mired.noisesd = 0.3

	 mired.drop=0.21


	mired.train(20)

} 	
 
 </textarea>