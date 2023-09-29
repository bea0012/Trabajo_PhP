<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //Ejercicio1
    //A.
    echo "Ejercicio 1:";
    echo "<br>";
    $var1="Hola";
    $var2="Mundo";
    $var3= $var1." ".$var2;
    echo "A. ";
    echo $var3;
    echo "<br>";
    //Se crea las variables y con el texto que queremos y lo concatenamos con un punto

    //B.
    $var4=true;
    echo "B. ";
    echo $var4;
    echo "<br>";
    //Creamos una variable y la igualamos a true haciendola un booleano

    //C.
    $var5=3.14;
    echo "C. ";
    echo $var5;
    echo "<br>";
    //Igualamos una nueva variable al número que nos piden convirtiendo la variable en un float

    //D.
    $var6=array("valor1"=>"1", "valor2"=>"2", "valor3"=>"3");
    echo "D. ";
    print_r($var6);
    echo "<br>";
    echo "<hr>";
    //Creamos una variable y creamos un array dentro con clave y valor de cada elemento y lo imprimimos con print_r que se usa para mostrar que hay dentro de un array
    
    //Ejercicio2
    echo "Ejercicio 2:";
    echo "<br>";
    $var4 = false;
    echo $var4;
    echo "<br>";
    echo "<hr>";
    //No aparece nada ya que al cambiar el valor a false se pone a 0 osea a nada

    //Ejercicio3
    echo "Ejercicio 3:";
    echo "<br>";
    $var3=str_replace(" ", "", $var3);
    echo $var3;
    echo "<br>";
    echo "<hr>";
    //Utilizamos el str_replace para cambiar un caracter seleccionado(" "), por otro que queramos ("") y al final la variable donde se aplicará ese cambio ($var3) y lo imprimimos

    //Ejercicio4
    echo "Ejercicio 4:";
    echo "<br>";
    $var6= "El operador “+” sirve para sumar el valor de variables. Con la “/”podemos
    dividir valores entre variables. El símbolo del dólar “\$” indica que estamos
    utilizando variables pero no lo usaremos en las constantes o globales";
    echo $var6;
    echo "<br>";
    echo "<hr>";
    //Creamos la variable con el texto seleccionado solo añadiendo "\" para caracteres especiales que no detecta php como texto como es en este caso el $ que se usa para nombrar variables

    //Ejercicio5
    echo "Ejercicio 5:";
    echo "<br>";
    $var7=strlen($var6);
    echo $var7;
    echo "<br>";
    echo "<hr>";
    //Utilizamos el "strlen" para medir la extensión del contenido de una variable 

    //Ejercicio6
    echo "Ejercicio 6:";
    echo "<br>";
    $var8= array("a", "e", "i", "o", "u");
    $vartext= "Hello World";
    $var9=str_replace($var8, "", $vartext);
    echo $var9;
    echo "<br>";
    echo "<hr>";
    //Utilizamos la misma funcion que en el ejercicio 3 pero esta vez creamos antes una variable array que contenga todos los caracteres que queremos modificar, introducimos la variable, después por que lo sustituimos "" y al final la variable donde aplicamos esos cambios

    //Ejercicio7
    echo "Ejercicio 7:";
    echo "<br>";
    $var10;
    $var11=empty($var10);
    echo $var11;
    echo "<br>";
    echo "<hr>";
    //creamos una variable vacía y se utiliza el empty() que te devuelve un true o 1 si esta vacío y un false o 0 (no se muestra nada) si no esta vacío

    //Ejercicio8
    echo "Ejercicio 8:";
    echo "<br>";
    $var12=intval($vartext);
    echo $var12;
    echo "<br>";
    echo "<hr>";
    //Devuelve un 0 ya que el intval() pasa la cadena de texto a integer y al no tener ningún caracter numérico devuelve un 0.

    //Ejercicio9
    echo "Ejercicio 9:";
    echo "<br>";
    //A
    $var13=sqrt(144);
    echo "A. ";
    echo $var13;
    echo "<br>";
    //Utilizo la función sqrt() que sirve para hacer la raíz cuadrada de un número, introduzco el número que me pide el ejercicio y te lo imprimo

    //B
    $var14=pow(2,3);
    echo "B. ";
    echo $var14;
    echo "<br>";
    //Utilizo la función pow() para elevar un número a otro

    //C
    $var15=100%6;
    echo "C. ";
    echo $var15;
    echo "<br>";
    //Utilizo el % para calcular el resto de la division de 100 entre 6

    //D
    //$var16= ;
    echo "D. ";

        function mcd($varA,$varB){
            if($varB==0)
                return $varA;
            else
                return mcd($varB,$varA%$varB);
            
        }
    echo mcd(3,6);
    echo "<br>";
    //Para calcular el máximo común divisor tengo que crear una función donde las variables que voy a usar son $varA y $varB, dentro creo un if donde si la varible B es 0 devolvemos la variable A
    //si no se devuelve la variable B y el resto de la division entre A y B.

    ?>
</body>
</html>