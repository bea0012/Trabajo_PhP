<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <div>
  <h3>Ejercicio 1:</h3>
    <form action="ejercicio2.php" method="post">
      <label for="preciot">Precio total de su compra:</label><br>
      <input type="text" id="precio" name="preciot" value="">
      <input type="submit" value="Calcular">
    </form> 
  </div>

    <?php
      if(isset($_POST["preciot"])){

        $valort = $_POST["preciot"];
        
        if($valort <= 0){
          echo "";
        }else if($valort < 50){
          echo "Su gasto de envío son de 3,95€";
        } else if($valort < 75){
          echo "Su gasto de envío son de 2,95€";
        }else if($valort <100){
          echo "Su gasto de envío son de 1,95€";
        }else if($valort > 100){
          echo "Su gasto de envío es gratuito";
        }
      }
    ?> //en este ejercicio utilizamos un if para que salga cada mensaje según el valor que introduzca

  <div>
    <h3>Ejercicio 2:</h3>
    <form action="ejercicio2.php" method="post">
      <label for="precio">Precio total de su compra:</label><br>
      <input type="text" id="precio" name="precio" value="">
      <input type="submit" value="Calcular">
    </form> 
  </div>

  <?php
    if(isset($_POST["precio"])){
      $valor = $_POST["precio"];

      switch($valor){
        case $valor < 50:
          echo "Su gasto de envío son de 3,95";
          break;
        case $valor < 70:
          echo "Su gasto de envío son de 2,95€";
          break;
        case $valor < 100:
          echo "Su gasto de envío son de 1,95€";
          break;
        case $valor > 100:
          echo "Su gasto de envío es gratuito";
          break;
        default:
          echo "";
      }
    }
  ?> //aquí hacemos lo mismo que en ejercicio anterior pero esta vez con un switch utilizando un case para cada casuistica

  <div>
    <h3>Ejercicio 3:</h3>
    <form action="ejercicio2.php" method="post">
      <label for="precio">Introduzca 5 números:</label><br>
      <input type="text" id="num1" name="num[]" value="">
      <input type="text" id="num2" name="num[]" value=""><br>
      <input type="text" id="num3" name="num[]" value="">
      <input type="text" id="num4" name="num[]" value=""><br>
      <input type="text" id="num5" name="num[]" value="">
      <input type="submit" value="Calcular">
    </form> 
  </div>

    <?php
    if(isset($_POST["num"])){
      $valores = $_POST["num"];

      $mayor = $valores[0];

      for($i=0; $i<5; $i++){

        if($valores[$i]>$mayor){
          $mayor = $valores[$i];
        }

      }
      echo $mayor;
    }

    ?> //hacemos 5 input diferentes que todos entren en el nombre "num[]" que es un array, luego utilizamos un array vacío "$mayor" el cual lo igualamos a otro array vacío
       // así dentro del for (que da solo 5 vueltas porque solo tenemos 5 numeros) creamos un if donde comparamos cada número del array de numeros que introduce el usuario
       //así cada vez que el valor es mayor que el que ya se encuentra en $mayor y si es mayor se cambia y almacena dentro $mayor
       //al final imprimimos el número que se encuentre en $mayor

  <div>
    <h3>Ejercicio 4:</h3>
      <form action="ejercicio2.php" method="post">
        <label for="matriz">Visualice la siguiente matriz:</label><br>
        <input type="submit" name="matriz" value="Mostrar">
      </form> 
  </div>

    <?php

    if(isset($_POST["matriz"])){

      $matriz = array(array(3, 1), array(2, 0));

      foreach($matriz as $fila) {
        foreach ($fila as $elemento) {
            echo " $elemento ";
        }
        echo "<br>";
      }
    }
    
    ?> //Utilizamos dos for each para recorrer la matriz de arrays e imprimir el elemento de cada fila y se vea de la manera que queremos

  <div>
    <h3>Ejercicio 5:</h3>
      <form action="ejercicio2.php" method="post">
        <label for="suma">La suma de estas matrices es:</label><br>
        <input type="submit" name="suma" value="Mostrar">
      </form> 
  </div>

    <?php
    
    if(isset($_POST["suma"]) ){

      $matriz1 = array(array(1, 0), array(0, 1));
      $matriz2 = array(array(0, 1), array(1, 0));
      $resultado = array(array(0, 0),array(0, 0));

      for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
        $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
        }
      }

      foreach($resultado as $fila) {
        foreach ($fila as $elemento) {
            echo " $elemento ";
        }
        echo "<br>";
      }
    }
    
    ?> //Utilizamos dos for para seleccionar las posiciones de la matriz y utilizarlos para sumar, lo almacenamos en otra matriz y luego la imprimimos como en el ejercicio anterior
    
</body>
</html>