<?php
$ID_usuario = $_POST['ID_usuario'];

require '../conector/conexion.php';

 $sql = mysql_query("DELETE FROM `usuario` WHERE `usuario`.`ID_usuario` = $ID_usuario");
 
 if($sql == TRUE){
 	echo "Eliminacion Correcta XD";
 }
?>