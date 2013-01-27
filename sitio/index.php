<?php include("index.src.php"); ?>
<?php $secciones = parse_ini_file("preguntas/preguntas.ini", true); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
		<title>Encuesta Indicadores de Sostenibilidad de la Salmonicultura</title>
		<link href="estilos.css" rel="stylesheet" type="text/css" />
	</head>
	<body bgcolor="#FFFFFF">
		<div class="Section1">
			<form id="form1" name="form1" method="post" action="guardar.php">
				<h1>Encuesta Indicadores de Sostenibilidad de la Salmonicultura</h1>
				<?php
				foreach($secciones as $seccion => $preguntas){
					echo "<h2>".utf8_encode($preguntas['titulo'])."</h2>";
					foreach($preguntas as $numero => $pregunta){
						if(!is_numeric($numero)) continue;
						echo pregunta(utf8_encode($pregunta), $numero);
					}
				}
				?>
			  <p>
				  <input type="submit" name="Submit" value="Enviar" />
				  <input type="reset" name="Submit2" value="Restablecer" />
			  </p>
			</form>
		</div>
	</body>
</html>
