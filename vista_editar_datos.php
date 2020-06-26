<?php

$ID_usuario = $_POST['ID_usuario'];

require '../conector/conexion.php';

$sql = mysql_query("SELECT * FROM usuario WHERE ID_usuario='$ID_usuario'");
$row = mysql_fetch_array($sql);

$nombre = $row['Nombres'];
$apellido = $row['correo electronico'];
$edad = $row['fecha de nacimiento'];

?>
<input type="hidden" id="ID_usuario" value="<?php echo $ID_usuario; ?>">
<label for="Nombres"> Nombres </label>
<input type="text" class="form-control" id="nombres_ed" placeholder="* Nombres " value="<?php echo $Nombres; ?>">

<label for="correo electronico"> correo electronico </label>
<input type="text" class="form-control" id="correo electronico_ed" placeholder="* correo electron" value="<?php echo $correo electronico; ?>">

<label for="edad"> Edad </label>
<input type="text" class="form-control" id="fecha de nacimiento_ed" placeholder="* fecha de nacimiento " value="<?php echo $fecha de nacimiento_ed; ?>">
