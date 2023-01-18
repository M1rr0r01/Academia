<?php
include("../util/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="icon" type="image/png" href="../assets/Image/icon.png">

</head>
<body>
<?php include("VerificarT.php")?> 
    <div class="todos"> 
    <h1 >Registro de pagos</h1>
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
                            <input type="text" name="reloj" size="10" style="background-color : Black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 25pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
                        </form>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?php
		                    $sql="SELECT Nombre,Apellido FROM Logink WHERE id_Cargo=2";
		                    $resultado=mysqli_query($conexion,$sql);
		                    while($mostrar=mysqli_fetch_array($resultado)){
                                
		                ?>
                            <td id="Tutora" name="Tutora">TUTORA: <?php echo $mostrar['Apellido']," ",$mostrar['Nombre']; ?></td>
                            <?php } ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                <?php 
                                $Fecha_actual = new DateTime("", new DateTimeZone('America/Lima'));

                                date_default_timezone_set('America/Lima');                              
                                ?>
                            </svg> Fecha: <input style=width:200px id="Fecha" name="Fecha" value="<?php echo date("d-m-Y", $Fecha_actual->format('U')); ?>">
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                            
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Apellidos y Nombres</th>          
                    </tr>
                </thead>
                <tbody>
                <?php
		                $sql="SELECT idAlumno, NombreCompleto FROM Home_Alumno";
		                $resultado=mysqli_query($conexion,$sql);
		                while($mostrar=mysqli_fetch_array($resultado)){

		            ?>
                    <tr>
                        <td><?php echo $mostrar['idAlumno']?></td>
                        <td><?php echo $mostrar['NombreCompleto']?></td>
                        <td><th><a href="RegistroPagosinsert.php?idAlumno=<?php echo $mostrar['idAlumno']?>" class="btn btn-info">Registrar</a></th></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
        <a align="right" href="ModificarPagos.php"><p align="right"> <input  type="buton" class="btn btn-outline-dark" value="siguiente" /></p> </a>
       
    </div>
    </div>
</body>
</html>