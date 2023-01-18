<?php
require '../util/conexion.php';

$Estado =$_POST['Estado'];
$Hora =$_POST['reloj'];
$Fecha =$_POST['Fecha'];
$Justificacion ="";
 

$insert="INSERT INTO Home_asistencia (Estado,Hora,Fecha,Justificacion) VALUES ('$Estado','$Hora','$Fecha','$Justificacion')";

$query = mysqli_query($conexion, $insert);

if($query){
    header("location:../controlador/RegistroDeAsistencia.php");
}
?>