<?php
require "../src/equipo.php";
$e=new equipo();
$e->conectar();
$resultado3= $e->listaEquipos();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
       <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   </head>
   <body>
         <?php include "./assets/navSup.php"; ?>

     <table>

       <tr>
         <td style="background-color:#498150; text-align:center;"><b>Ciudad</b></td>
         <td style="background-color:#498150;text-align:center;"><b>Nombre</b></td>
         <td style="background-color:#498150; text-align:center;"><b>Division</b></td>
         <td style="background-color:#498150; text-align:center;"><b>Conferencia</b></td>
       </tr>
         <?php foreach ($resultado3 as $usuario) {
             echo "<tr>";
             echo "<td style='text-align:center'>".$usuario["Ciudad"]."</td>";
             echo "<td style='text-align:center'>".$usuario["Nombre"]."</td>";
             echo "<td style='text-align:center'>".$usuario["Division"]."</td>";
             echo "<td style='text-align:center'>".$usuario["Conferencia"]."</td>";
           }
           ?>
   </tr>
   </table>
        <?php include "./assets/piesito.php"; ?>
   </body>
 </html>
