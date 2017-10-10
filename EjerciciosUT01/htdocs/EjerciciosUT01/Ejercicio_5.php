<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>

    <style media="screen">

      body {
        font-size: 40px;
      }
    </style>
  </head>
  <body>

   <!-- Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente.
        A continuación, muestra por pantalla el valor de cada variable, la suma,
        la resta, la división y la multiplicación.-->

        <?php
          $x = 144; $y = 999; echo "El valor de X es: " . $x . "<br> El valor de y: " . $y . "<br> La suma de los 2 valores es: " . ($x+$y) . "<br>  La resta es: " . ($x-$y) . "<br> La multiplicación es: " . ($x*$y) . "<br> La división es: " . ($x/$y);

         ?>


  </body>
</html>
