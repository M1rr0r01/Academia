<?php
include("../util/conexion.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" /> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Asistencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jspdf/dist/jspdf.min.js"></script>
    <script src="js/jspdf.plugin.autotable.min.js"></script>
    <link rel="icon" type="image/png" href="../assets/Image/icon.png">

         
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
      
</head>
<body>
 <?php include("VerificarT.php")?> 
    <div class="todos"> 
    <h1 >Informe de Asistencia</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
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
                            <form name="form_reloj">
                            <body onload="mueveReloj()">
                            <input type="text" id="Hora" name="reloj" size="10" style="background-color : gray; color : White; font-family : Verdana, Arial, Helvetica; font-size : 25pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
                        </form>

                            </body>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
            
        </div>
        <br>
        
        <div class="table-responsive">
            <table id="example" class="table">
                <thead>
                    <tr>
                     
                        <th>Nº</th>
                        <th>Código</th>
                        <th>Apellidos y Nombres</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                 
                <tbody>
                <?php
		                    $sql="SELECT CodAsistencia, CodAlumno, NombreCompleto, Fecha, Estado, idAlumno FROM Home_Alumno, Home_asistencia";
		                    $resultado=mysqli_query($conexion,$sql);
		                    while($mostrar=mysqli_fetch_array($resultado)){
                                    $contA=1;
                                    $contF=1;
                               
                            if($mostrar['CodAsistencia']==$mostrar['idAlumno']){
                                 
 
                               
                              
		                    ?>
                    <tr>
                        <td><?php echo $mostrar['CodAsistencia']?></td>
                        <td><?php echo $mostrar['CodAlumno']?></td>
                        <td><?php echo $mostrar['NombreCompleto']?></td>
                        <td><?php echo $mostrar['Fecha']?></td>
                        <td> 
                        <?php echo $mostrar['Estado']?>
                        </td> 
                    </tr>
                    <?php    
	            }
                }
	            ?>
                </tbody>
               </table>
               
        <tr>
        <?php
		                    $sql="SELECT Estado FROM Home_asistencia";
		                    $resultado=mysqli_query($conexion,$sql);
		                    while($mostrar=mysqli_fetch_array($resultado)){
                             
                                    $contA=1;
                                    $contF=1;
                                 
                                   
                                        $contAa=1;
                                        $contA=$contA+$contAa;
                     
                            }
		                    ?>
        <td width="70%">Num total de Asistencias en el mes: <?php echo $contA;?></td>
        
         <br>
         
        
        </tr><br>
         
        <tr>
        <td width="70%">Num total de Faltas en el mes:  <?php echo $contF;   ?></td> 
       
         
        </tr>
         
        </div>
        
        <br>
     </div>
    </div>

    <form action="../vista/Home.php">
            <p align="right"> <input type="submit" class="btn btn-outline-dark" value="Volver" /> </p>
    </form>
      <!-- jQuery, Popper.js, Bootstrap JS -->
      <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  
    
    
</body>
</html>