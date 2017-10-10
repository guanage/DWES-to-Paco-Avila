<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 10</title>

    <style>
    div {
        width: 100px;
        height: 100px;
        position: relative;
        -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
        animation: mymove 3s infinite;
    }

    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes mymove {
        from {left: 0px;}
        to {left: 1000px;}
    }

    @keyframes mymove {
        from {left: 0px;}
        to {left: 2000px;}
    }

    .error {
      width: 100%;
      height: 100%;
      font-size: 20px;
      font-family: monospace;
      transition: 0.1s;
    }

    .error:hover {
      font-size: 150px;

    }

    h1 {
      font-size: 70px;
      text-align: center;
    }

    </style>
  </head>
  <body>


<div class="error">



    <?php

    echo "*********<br>";
    echo "&nbsp;*******<br>";
    echo "&nbsp;&nbsp;*****<br>";
    echo "&nbsp;&nbsp;&nbsp;***<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;*<br>";



     ?>
</div>


<h1 id="testing">ATRAPA CON EL RATÓN EL TRIANGULO</h1>
  </body>
</html>
