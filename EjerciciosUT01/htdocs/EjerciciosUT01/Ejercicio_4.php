<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Ejercicio 4
    </title>


    <style media="screen">


    table {
      font-size: 50px;
    }
      td, th {
        border: 1px blue dashed;
      }

      .noShow {
        border: 0px;
      }

    </style>
  </head>
  <body>



    <table>
       <tr><th class="noShow"></th><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th></th>
       <tr><th>08:20h</th><td>DWES</td><td>DIW</td><td>DIW</td><td>DAW</td><td>DWEC</td></tr>
       <tr><th>09:20h</th><td>DWES</td><td>DIW</td><td>DIW</td><td>EIE</td><td>DWEC</td></tr>
 <?php  echo "<tr><th>10:20h</th><td>HLC</td><td>DIW</td><td>EIE</td><td>DIW</td><td>DWEC</td></tr>";
        echo "<tr><td colspan = '6' style = 'text-align: center;'>RECREO</td></tr>";
        echo "<tr><th>11:50h</th><td>DWEC</td><td>DWES</td><td>EIE</td><td>DWES</td><td>EIE</td></tr>";
        echo "<tr><th>12:50h</th><td>HLC</td><td>DIW</td><td>EIE</td><td>DIW</td><td>DWEC</td></tr>";
      ?>
      <tr><th>13:50h</th><td>DEWC</td><td>DEWS</td><td>DAW</td><td>DWES</td><td>HLC</td></tr>

     </table>


  </body>
</html>
