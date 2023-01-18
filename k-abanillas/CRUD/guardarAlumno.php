<?php
require '../util/conexion.php';
$CodAlum='Al05';
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$CodAlumno=$CodAlum.substr(str_shuffle($permitted_chars), 0, 2);
$NombreCompleto =$_POST['NombreCompleto'];
$DNI =$_POST['DNI'];
$Domicilio =$_POST['Domicilio'];
$Telefono =$_POST['Telefono'];
$Carrera =$_POST['Carrera'];
$NombreCompletoApoderado =$_POST['NombreCompletoApoderado'];
$TelefonoApoderado =$_POST['TelefonoApoderado'];
$Relacion=$_POST['Relacion'];
$Salon =$_POST['Salon'];
$Ciclo =$_POST['Ciclo'];
$CorreoApoderado=$_POST['CorreoApoderado'];
 
if($Carrera==1){
    $Carrera="MEDICINA HUMANA";
}else if($Carrera==2){
    $Carrera="INGENIERÍA CIVIL";
}else if($Carrera==3){
    $Carrera="INGENIERÍA DE SOFTWARE";
}else if($Carrera==4){
    $Carrera="DERECHO";
}else if($Carrera==5){
    $Carrera="CONTABILIDAD";
}else if($Carrera==6){
    $Carrera="ADMINISTRACIÓN";
}else if($Carrera==7){
    $Carrera="PSICOLOGÍA";
}
if($Ciclo==1){
    $Ciclo="Anual";
}else if($Ciclo==2){
    $Ciclo="Mensual";
}
$insert="INSERT INTO Home_Alumno (CodAlumno,NombreCompleto,NombreCompletoApoderado,DNI,Domicilio,Telefono, Carrera, Salon, Ciclo, TelefonoApoderado,Relacion,CorreoApoderado) VALUES ('$CodAlumno','$NombreCompleto','$NombreCompletoApoderado','$DNI','$Domicilio','$Telefono', '$Carrera', '$Salon', '$Ciclo', '$TelefonoApoderado','$Relacion','$CorreoApoderado')";

$query = mysqli_query($conexion, $insert);

if($query){
    header("location:../modelo/RegistroAlumnos.php");
}
 
?>

 