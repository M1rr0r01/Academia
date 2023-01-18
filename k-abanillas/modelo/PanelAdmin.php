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
		<div class="Panelsuperior"> 
						<ul class="main-menu" >
						    <li>
								<p><b>Academia K-Banillas</b></p>
							</li>
							<li class="active-menu" >
								<a href="../vista/home.php"><b>Home</b></a>
							</li>
							<li>
								<a href="#"><b>Asistencia</b></a>
								<ul class="sub-menu">
									<li><a href="../controlador/RegistroDeAsistencia.php">Registro de asistencia</a></li>
									<li><a href="../controlador/ModificarAsistencia.php">Modificar asistencia</a></li>
									<li><a href="../controlador/InformeDeAsitencia.php">Informe de asistencia</a></li>
								</ul>
							</li>
							<li>
								<a href=""><b>Notas</b></a>
								<ul class="sub-menu">
									<li><a href="../controlador/RegistroDeNotas.php"> Registro de notas</a></li>
									<li><a href="../controlador/ModificarNotas.php">Modificar notas</a></li>
									<li><a href="../controlador/ReporteNotas.php">Reporte de notas</a></li>
								</ul>
							</li>

							<li>
								<a href=""><b>Pagos</b></a>
								<ul class="sub-menu">
									<li><a href="../controlador/RegistroPagos.php">Registro de pagos</a></li>
									<li><a href="../controlador/ModificarPagos.php">Modificar pagos</a></li>
									<li><a href="../controlador/ReportePagos.php">Reporte de pagos</a></li>
								</ul>
							</li>
							<li>
								<a href=""><b>Alumnos</b></a>
								<ul class="sub-menu">
									<li><a href="../modelo/RegistroAlumnos.php">Registro de alumnos</a></li>
								</ul>
							</li>
							<li>
								<a href=""><b>Tutoras</b></a>
								<ul class="sub-menu">
									<li><a href="../controlador/RegistroTutor.php">Registro de Tutores</a></li>
								</ul>
							</li>
							<li><b>
							<?php
							 $Nombre=$_SESSION['Nombre'];
		                     $sql="SELECT Nombre FROM Logink WHERE Nombre='$Nombre'";
		                     $resultado=mysqli_query($conexion,$sql);
							 while($mostrar=mysqli_fetch_array($resultado)){
							
						   ?>
								<a class="user transformacionM"><?php echo $mostrar['Nombre'];?></a>
								<?php  }?>
								</b>
							</li>
							<li>
							<a class="cerrar"><img src="../images/icons/cerrar.png"/></a>
							<ul class="sub-menu">
							<li><a href="../util/exit.php">Salir</a></li>
							</li>
							
						</ul>	
						
					</div>
					 
					</div>
				</nav>
			</div>	
		</div>	
        </body>
</html>