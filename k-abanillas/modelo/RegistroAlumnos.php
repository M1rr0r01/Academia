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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
    <link rel="icon" type="image/png" href="../assets/Image/icon.png">
    
</head>

<body>
<?php include("../controlador/VerificarT.php")?> 
    <div class="todos">  
    <h1 >Registro de alumnos</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                        <script language="JavaScript">
                            function mueveReloj(){
                                momentoActual = new Date()
                                hora = momentoActual.getHours()
                                minuto = momentoActual.getMinutes()
                                segundo = momentoActual.getSeconds()

                                str_segundo = new String (segundo)
                                if (str_segundo.length == 1)
                                segundo = "0" + segundo

                                str_minuto = new String (minuto)
                                if (str_minuto.length == 1)
                                minuto = "0" + minuto

                                str_hora = new String (hora)
                                if (str_hora.length == 1)
                                hora = "0" + hora

                                horaImprimible = hora + " : " + minuto + " : " + segundo

                                document.form_reloj.reloj.value = horaImprimible

                                setTimeout("mueveReloj()",1000)
                            }
                            </script>
                            <body onload="mueveReloj()">
                            <form name="form_reloj">
                            <input type="text" name="reloj" size="10" style="background-color : gray; color : White; font-family : Verdana, Arial, Helvetica; font-size : 25pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
                            </form>
                        </h5>
                    </div>
                </div>
            </div>
    <form action="../CRUD/guardarAlumno.php" method="post">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?php
		                    $sql="SELECT Nombre,Apellido FROM Logink WHERE id_Cargo=2";
		                    $resultado=mysqli_query($conexion,$sql);
		                    while($mostrar=mysqli_fetch_array($resultado)){
                                
		                ?>
                        <td id="Tutora" name="Tutora">TUTORA: <?php echo $mostrar['Apellido']," ",$mostrar['Nombre']; ?> </td>
                        <?php } ?>
                        </h5>
                    </div>
                    
                </div>
            </div>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Estudiante
                        </h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Apellidos y Nombres: </span>
                            <input id="NombreCompleto" name="NombreCompleto" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">DNI: </span>
                            <input id="DNI" name="DNI" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Domicilio: </span>
                            <input id="Domicilio" name="Domicilio" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Teléfono: </span>
                            <input id="Telefono" name="Telefono" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Carrera: </span>
                            <select id="Carrera" name="Carrera" class="form-select" aria-label="Default select example">
                            <option selected >Seleccione</option>
                                <option value="1">MEDICINA HUMANA</option>
                                <option value="2">INGENIERÍA CIVIL</option>
                                <option value="3">INGENIERÍA DE SOFTWARE</option>
                                <option value="1">DERECHO</option>
                                <option value="2">CONTABILIDAD</option>
                                <option value="3">ADMINISTRACIÓN</option>
                                <option value="3">PSICOLOGÍA</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Salon: </span>
                            <input id="Salon" name="Salon" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Ciclo: </span>
                            <select id="Ciclo" name="Ciclo" class="form-select" aria-label="Default select example">
                            <option selected >Seleccione</option>
                                <option value="1">Anual</option>
                                <option value="2">Semanal</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Apoderado
                        </h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Apellidos y Nombres: </span>
                            <input id="NombreCompletoApoderado" name="NombreCompletoApoderado" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Teléfono: </span>
                            <input id="TelefonoApoderado" name="TelefonoApoderado" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Correo: </span>
                            <input id="CorreoApoderado" name="CorreoApoderado" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Relación: </span>
                            <input id="Relacion" name="Relacion" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="posicionbotons d-grid gap-2 d-md-block" id="boton" type="submit">
            <button class="btn btn-info" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                    <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                </svg>Guardar
            </button>
        </div>
    </div>
    </form>
   </div>
</body>
</html>