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
    <h1 >Registro De Notas</h1>
    
    <div class="col row row-cols-1 row-cols-md-3 g-4">
                <div class="card">
                    <div class="card-body">
                     
                        <h5 class="card-title">
                        <form action="./CRUD/guardarNotas.php" method="post">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                <?php 
                                $Fecha_actual = new DateTime("", new DateTimeZone('America/Lima'));

                                date_default_timezone_set('America/Lima');    
                                $fecha=date("d-m-Y", $Fecha_actual->format('U'));                          
                                ?>
                                
                            </svg> Fecha:<input style=width:200px id="Fecha" name="Fecha" value="<?php echo $fecha; ?>">
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
                        <td>TUTORA: <?php echo $mostrar['Apellido']," ",$mostrar['Nombre']; ?> </td>
                        <?php } ?>
                        </h5>
                    </div>
                </div>
            <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">      
                        <td>Nombre</td>
                        <input placeholder="buscar" id="buscar" name="buscar" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                        </h5>
                    </div>
                </div>
            <div >
            </div>         
        </div>
        <div class="positionEvaluacion">Evaluaciones</div>
        <div class="positionSemanal1">Semanales</div>
        <div class="positionSimulacro1">Simulacros</div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Código</th>
                        <th>Apellidos y Nombres</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                            $idAlumno=$_GET['idAlumno'];
		                    $sql="SELECT idAlumno, CodAlumno, NombreCompleto FROM Home_Alumno WHERE idAlumno='$idAlumno'";
		                    $resultado=mysqli_query($conexion,$sql);
                            $mostrar=mysqli_fetch_array($resultado);
                        
                            
		                    ?>
                    <tr>
                        <td><?php echo $mostrar['idAlumno']?></td>
                        <td><?php echo $mostrar['CodAlumno']?></td>
                        <td><?php echo $mostrar['NombreCompleto']?></td>
                        <td><input name="NotaS1"  type="text" id="NotaS1" value="" style="width:60px; height:23px;"></td>
                        <td><input name="NotaS2"  type="text" id="NotaS2" value="" style="width:60px; height:23px"></td>
                        <td><input name="NotaS3"  type="text" id="NotaS3" value="" style="width:60px; height:23px"></td>
                        <td><input name="NotaS4"  type="text" id="NotaS4" value="" style="width:60px; height:23px"></td>
                        <td><input name="NotaC1"  type="text" id="NotaC1" value="" style="width:60px; height:23px"></td>
                        <td><input name="NotaC2"  type="text" id="NotaC2" value="" style="width:60px; height:23px"></td>
                       
                    </tr>
                </tbody>
                 
            </table>
        </div>
        <br>
        <div class="posicionbotones d-grid gap-2 d-md-block" id="submit">
            <button class="btn btn-info" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                    <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                </svg> Guardar</button>
        </div>
    
    </div>
</form>
</body>
</html>