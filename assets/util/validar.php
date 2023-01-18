 
<?php
$conexion=mysqli_connect("localhost","root","jesus","K_abanillas");

$Nombre=$conexion->real_escape_string($_POST['Nombre']);
$Contraseña=$conexion->real_escape_string($_POST['Contraseña']);
$Contraseña_fuente=md5($Contraseña);
session_start();
$_SESSION['Nombre']=$Nombre;
$consulta="SELECT Nombre,Contraseña FROM Logink where Nombre='$Nombre' and Contraseña='$Contraseña_fuente'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:../../k-abanillas/vista/home.php");

}else{
    ?>
    <?php
    header("location:../../index.php");
    ?>

    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>