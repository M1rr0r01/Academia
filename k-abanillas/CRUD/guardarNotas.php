<?php
require '../util/conexion.php';
$NotaS1 =$_POST['NotaS1'];
$NotaS2 =$_POST['NotaS2'];
$NotaS3 =$_POST['NotaS3'];
$NotaS4 =$_POST['NotaS4'];
$NotaC1 =$_POST['NotaC1'];
$NotaC2 =$_POST['NotaC2'];
$Fecha  =$_POST['Fecha'];
$Tipo ="";
$Observacion ="";
 
$insert="INSERT INTO Home_Notas (NotaS1,NotaS2,NotaS3,NotaS4,NotaC1,NotaC2,Fecha,Tipo,Observacion) VALUES ('$NotaS1','$NotaS2','$NotaS3','$NotaS4','$NotaC1','$NotaC2','$Fecha','$Tipo','$Observacion')";

$query = mysqli_query($conexion, $insert);

if($query){
    header("location:../controlador/RegistroDeNotas.php");
}
?>