<?php
require '../util/conexion.php';
$CodNotas=$_POST['CodNotas']; 
$Fecha =$_POST['Fecha']; 
$NotaS1 =$_POST['NotaS1'];
$NotaS2 =$_POST['NotaS2'];
$NotaS3 =$_POST['NotaS3'];
$NotaS4 =$_POST['NotaS4'];
$NotaC1 =$_POST['NotaC1'];
$NotaC2 =$_POST['NotaC2'];
$Observacion =$_POST['Observacion'];
$Tipo ="";

$update = "UPDATE Home_notas SET NotaS1='$NotaS1',NotaS2='$NotaS2',NotaS3='$NotaS3',NotaS4='$NotaS4',NotaC1='$NotaC1',NotaC2='$NotaC2',Fecha='$Fecha',Tipo='$Tipo', Observacion = '$Observacion' WHERE CodNotas = '$CodNotas'";

$query = mysqli_query($conexion, $update);

if($query){
    header("location:../controlador/ModificarNotas.php");
}
?>