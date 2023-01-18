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
    <h1>Modificar Asistencia</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
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
                            <form action="../CRUD/modificarAsistencia.php" method="post" name="form_reloj">
                            <input type="text" id="Hora" name="reloj" size="10" style="background-color : gray; color : White; font-family : Verdana, Arial, Helvetica; font-size : 25pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
                            </body>
                        </h5>
                    </div>
                </div>
            
        <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">
                        <?php
                            $Nombre=$_SESSION['Nombre'];
                            $Cargo="Tutora";
		                    $sql="SELECT Nombre,Apellido FROM Logink WHERE Nombre='$Nombre' AND Cargo='$Cargo'";
		                    $resultado=mysqli_query($conexion,$sql);
		                    while($mostrar=mysqli_fetch_array($resultado)){
		                ?>
                        <td id="Tutora" name="Tutora">TUTORA: <?php echo $mostrar['Apellido']," ",$mostrar['Nombre']; ?> </td>
                        <?php } ?>
                        </h5>
                </div>
            </div>
             
            <div >
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
            <div class="col">
            </div>
            
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Código</th>
                        <th>Apellidos y Nombres</th>                      
                        <th>ESTADO</th> 
                        <th>Justificacion</th> 
                    </tr>
                </thead>
                <tbody>
                
                <?php
                            $CodAsistencia=$_GET['CodAsistencia'];
		                    $sql="SELECT CodAsistencia, CodAlumno, NombreCompleto, Fecha, Estado, Justificacion, idAlumno FROM Home_Alumno, Home_asistencia WHERE CodAsistencia='$CodAsistencia'";
		                    $resultado=mysqli_query($conexion,$sql);
                            $row=mysqli_fetch_array($resultado);
                            
                        ?>
                        
                    <tr>
                        <td><input type="text" name='CodAsistencia' style="width:15px" type="text" value="<?php echo $row['CodAsistencia']?>"></td>

                        <td><?php echo $row['CodAlumno']?></td>
                        <td><?php echo $row['NombreCompleto']?></td>
                        <td>
                        <div class="form-check form-check-inline"> 
                        <input name="Estado"  class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Asistio" <?php if($row['Estado']=="Asistio"){ ?>checked <?php }?>>
                            <label class="form-check-label" for="inlineCheckbox1">A</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input name="Estado" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Tardanza" <?php if($row['Estado']=="Tardanza"){ ?>checked <?php }?>>
                         <label class="form-check-label" for="inlineCheckbox2">T</label>
                            </div>
                        <div class="form-check form-check-inline">
                             <input name="Estado" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Falto" <?php if($row['Estado']=="Falto"){ ?>checked <?php }?>>
                            <label class="form-check-label" for="inlineCheckbox3">F</label>
                        
                        <td><label for="exampleDataList" class="form-label"></label>
                        <input name="Justificacion" value="<?php echo $row['Justificacion']?>" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Justificacion"> 
                        </td>    
                        </div>
                    </tr>
                </tbody>
              
            </table>
            
        </div>
        <br>
        <div class="posicionbotones d-grid gap-2 d-md-block" id="boton">
            <button class="btn btn-info" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg> Modificar
            </button>
        </div>
         
        </form>
    </div>
</body>
</html>