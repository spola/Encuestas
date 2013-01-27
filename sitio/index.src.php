<?php
function pregunta($titulo, $numero){
	$result = "<h3>$titulo</h3>";
	$result.= "\n".opciones($numero);
	$result.= "<p>&nbsp;</p>";
	$result.= "\n".comentario($numero);
	
	return $result;
}
?>

<?php 
function opciones($numero = null){
		if($numero == null) return "";
	ob_start();?>
				<ul>
					<li><input name="preg_<?php echo $numero?>[]" type="radio" value="Completamente" /><span>Completamente</span></li>
					<li><input name="preg_<?php echo $numero?>[]" type="radio" value="Medianamente" /><span>Medianamente</span></li>
					<li><input name="preg_<?php echo $numero?>[]" type="radio" value="Regular" /><span>Regular</span></li>
					<li><input name="preg_<?php echo $numero?>[]" type="radio" value="Deficiente" /><span>Deficiente</span></li>
					<li><input name="preg_<?php echo $numero?>[]" type="radio" value="NS/NR" /><span>NS/NR</span></li>
				</ul>
<?php
	$result  = ob_get_clean();
	return $result;
}

?>

<?php
function comentario($numero = null){
	if($numero == null) return "";
	ob_start();?>
	<p><span>Comentarios: <input name="preg_<?php echo $numero?>[]" type="text" size="100" maxlength="150" /></span></p>
<?php
	$result  = ob_get_clean();
	return $result;
}
?>