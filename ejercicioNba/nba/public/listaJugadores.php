<?php
require "../src/Jugador.php";
$j=new Jugador();
$j->conectar();
$resultado2= $j->listarjugadores();
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
         <td style="background-color:#498150; text-align:center;"><b>codigo</b></td>
         <td style="background-color:#498150;text-align:center;"><b>Nombre</b></td>
         <td style="background-color:#498150; text-align:center;"><b>Peso</b></td>
       </tr>
         <?php foreach ($resultado2 as $usuario) {
             echo "<tr>";
             echo "<td style='text-align:center'>".$usuario["codigo"]."</td>";
             echo "<td style='text-align:center'>".$usuario["Nombre"]."</td>";
             echo "<td style='text-align:center'>".$usuario["Peso"]."</td>";
           }
           ?>
   </tr>
   </table>
        <?php include "./assets/piesito.php"; ?>
   </body>
 </html>
