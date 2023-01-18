<?php
require '../util/conexion.php';

$CodPago='Co0';
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$CodPags=$CodPago.substr(str_shuffle($permitted_chars), 0, 2);
$monto =$_POST['monto'];
$Descripcion =$_POST['Descripcion'];
$Fecha =$_POST['Fecha'];
$Tipopag =$_POST['Tipopag'];

$insert="INSERT INTO Home_Pagos (CodPags,monto,Descripcion,Fecha,Tipopag) VALUES ('$CodPags','$monto','$Descripcion','$Fecha','$Tipopag')";

$query = mysqli_query($conexion, $insert);

if($query){
    header("location:../controlador/RegistroPagos.php");
}
?>

 