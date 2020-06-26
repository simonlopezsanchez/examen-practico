<!DOCTYPE html>
<html>
<head>
	<title> EXAMEN PRACTICO </title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap-theme.min.css">

	<script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../controlador/control_usuario.js"></script>

</head>
<body>
	<h1> <CENTER>EXAMEN PRACTICO</CENTER></h1>

	<div class="row" style="margin: 0px; padding: 0px;">

    <div class="col-lg-6 col-md-8 xs-12">
    	<h3 align="center"> REGISTRO DE EMPLEADOS </h3>
    	<div id="panel_registro" style="padding: 5%; box-shadow: 1px 2px 2px #A4A4A4; border:1px solid #A4A4A4;" align="center">
    		<!-- Panel de datos -->
    		<table class="table table-condensed" style="width: 70%;">
    			<tr>
    				<td> <label> Nombres </label></td>
    				<td> <input type="text" id="Nombres" class="form-control" placeholder="* Nombres"></td></tr>
    			<tr> <td> <label> correo electronico </label></td>
    				<td> <input type="text" id="correo electronico" class="form-control" placeholder="* correo electronico"></td></tr>
    			<tr> <td> <label>fecha de nacimiento</label></td>
    				<td> <input type="number" id="fecha de nacimiento" min="0" class="form-control" placeholder="*fecha de nacimiento"></td>
    			</tr>
    			<tr>
    				<td colspan="2">
    					<hr>
    					<div id="panel_respuesta"></div>
    				</td>
    			</tr>
    			<tr>
    				<td colspan="2" align="center">
    					<button class="btn btn-success btn-md" onclick="btn_guardar_dato();"> Registrar </button>
    				</td>
    			</tr>

    		</table>

    	</div>

    </div>
    <div class="col-lg-6 col-md-8 xs-12">
    	<h3 align="center"> Listado de Datos </h3>
    	<button class="btn btn-info btn-md" onclick="btn_listar_datos();"> Listar </button>
    	<div id="panel_listado">
    		<!-- Panel de datos -->

    	</div>
    </div>
	</div>

</body>
</html>
