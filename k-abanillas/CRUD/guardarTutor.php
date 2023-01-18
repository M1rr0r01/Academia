<?php
require '../util/conexion.php';
$Apellido =$_POST['Apellido'];
$Nombre =$_POST['Nombre'];
$Contraseña =$_POST['Contraseña'];
$Genero =$_POST['Genero'];
$DNI =$_POST['DNI'];
$Correo =$_POST['Correo'];
$Domicilio =$_POST['Domicilio'];
$Cargo ="";
$Ciclo =$_POST['Ciclo'];
$Telefono =$_POST['Telefono'];
$Contraseñas=md5($Contraseña);

if($Genero==1){
    $Genero="Mujer";
    $Cargo="Tutora";
}else if($Genero==2){
    $Genero="Hombre";
    $Cargo="Tutor";
}

$insert="INSERT INTO Logink (Apellido,Nombre,Contraseña,Genero,DNI,Correo,Domicilio,Cargo,ciclo,Telefono) VALUES ('$Apellido','$Nombre','$Contraseñas','$Genero','$DNI','$Correo','$Domicilio','$Cargo','$Ciclo','$Telefono')";


$query = mysqli_query($conexion, $insert);

if($query){
    header("location:../controlador/RegistroTutor.php");
}
?>