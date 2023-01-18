<?php
include("../util/conexion.php");
session_start();
error_reporting(0);
$varsesion = $_SESSION['Nombre'];
if( $varsesion== null || $varsesion='' ){
	header("location:../../index.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
</head>

<body class="body">	 
	<?php include("../controlador/Verificar.php")?> 
	
	<form class="menu_centro" method="POST" name="datos_usuario" id="datos_usuario">		
	 
	<img class="imgU"  src="../images/icons/fond.jpg">
	<table align="center" class="centrarT textcolor" width="20%"> 
	    <?php
		$Nombre=$_SESSION['Nombre'];
		$sql="SELECT Apellido,Nombre,Genero,DNI,Correo,Cargo,Telefono FROM Logink WHERE Nombre='$Nombre'";
		$resultado=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($resultado)){
		?>
		<tr>
			<td><b>Apellidos⠸</b></td>
			<td>
			<b><?php echo $mostrar['Apellido']?></b>
			
		    </td>
		<tr>
			<td><b>Nombre⠸</b></td>
			<td>
			<b><?php echo $mostrar['Nombre']?></b>
			
		    </td>
		</tr>
		<tr>
			<td><b>Género⠸</b></td>
			<td>
			<b><?php echo $mostrar['Genero']?></b>
			
		    </td>
		</tr>
		<tr>
			<td><b>DNI⠸</b></td>
			<td>
			<b><?php echo $mostrar['DNI']?></b>
		    </td>
		</tr>
		<tr>
			<td><b>Correo⠸</b></td>
			<td>
			<b><?php echo $mostrar['Correo']?></b>
		    </td>
		</tr>
		<tr>
			<td><b>Télefono⠸</b></td>
			<td>
			<b><?php echo $mostrar['Telefono']?></b>
			
		    </td>
		</tr>
		<tr>
			<td><b>Cargo⠸</b></td>
			<td>
			<b><?php echo $mostrar['Cargo']?></b>
		    </td>
		</tr>
	  <?php    
	   }
	   ?>
	</table>	  
	<br>
</form>
</body>
</html>