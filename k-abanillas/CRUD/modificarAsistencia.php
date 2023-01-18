<?php
require '../util/conexion.php';
$Estado =$_POST['Estado']; 
$Hora=$_POST['reloj'];
$Fecha =$_POST['Fecha'];
$CodAsistencia=$_POST['CodAsistencia'];
$Justificacion =$_POST['Justificacion'];


$update = "UPDATE home_asistencia  SET  Estado = '$Estado', Hora = '$Hora', Fecha = '$Fecha', Justificacion = '$Justificacion' WHERE CodAsistencia = '$CodAsistencia'";
$query = mysqli_query($conexion, $update);

if($query){
    header("location:../controlador/ModificarAsistencia.php");
    
} 
?>