<?php
require '../util/conexion.php';
$CodPagos=$_POST['CodPagos'];
$monto =$_POST['monto'];
$Descripcion =$_POST['Descripcion'];
$Fecha =$_POST['reloj'];
$Tipopag =$_POST['Tipopag'];

$update = "UPDATE Home_Pagos SET  monto = '$monto', Descripcion = '$Descripcion',  Fecha = '$Fecha', Tipopag = '$Tipopag' WHERE CodPagos = '$CodPagos'";
$query = mysqli_query($conexion, $update);



if($query){
    header("location:../controlador/ModificarPagos.php");
}
?>