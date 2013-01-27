<?php
function ejecutar(){
	/*
	echo "<pre>";
	print_r($_POST);
	echo "<pre>";
	tabla();
	*/
	
	$header = " ;";
	$alternativas = "alternativas;";
	$result = "comentarios;";
	foreach($_POST as $key => $array){
		if(!is_array($array)) continue;
		$header.=$key.";";
		$alternativas.= $array[0].";";
		$result.= $array[1].";";
	}
	$header.="\n";
	$alternativas.="\n";
	$result.="\n";

	guardar($header);
	guardar($alternativas);
	guardar($result);
}

function tabla(){
//	print_r($_POST);
	echo "<table>";
	echo "<tr><th>Pregunta</th><th>Respuesta</th><th>Comentario</th></tr>";
	foreach($_POST as $key => $array){
		if(!is_array($array)) continue;
		echo "<tr><td>$key</td><td>{$array[0]}</td><td>{$array[1]}</td></tr>";
	}
	echo "</table>";
}
?>
<?php
$fd = null;
function guardar($linea){
	if($fd == null){
		$name = time();
		$name = "respuestas";
		$fd = fopen("respuestas/$name.csv", "a");
	}
	fwrite($fd, $linea);
}
?>