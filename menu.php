<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <br>
    <p>Ruta actual <input type="submit" name="URL"/> </p>
    <br>
    <br>
    <p>Buscar fichero: <input type="text" name="nombre"/> 
    <input type="submit" name="buscar"/></p>
    <br>
    <br>
    <p>Crea un nuevo fichero: <input type="text" name="nombreNuevo"/> 
    <input type="submit" name="crear"/></p>
</form>

<?php

if(isset($_POST["login"])){
    $user = $_POST["user"];
    $password = $_POST["pass"];

    validar($user, $password);
}

function validar($user, $password) {
    if ($user == "admin") {
        if ($password == "1234") {
            echo "Contraseña correcta!";
            $fechaActual = date('Y-m-d');
            $horaActual = date('H:i:s');
            echo " La hora de entrada es: " . $horaActual . " y la fecha es: " . $fechaActual;
        } else {
            echo "Contraseña incorrecta >:(";
            header('Location: practica4.php');
            exit();
        }
    } else {
        echo " Usuario incorrecto >:( ";
        header('Location: practica4.php');
    }
}

if (isset($_POST["URL"])) {
    $current_url = $_SERVER['REQUEST_URI'];
    echo "La ruta actual de la página es: " . $current_url;
}

if (isset($_POST["buscar"])) {
    $rutaDir = "C:/xampp/htdocs/servidor";
    $nombreBuscado = $_POST["nombre"];

    echo "Archivos encontrados en la ruta $rutaDir que coinciden con '$nombreBuscado':<br>";

    $archivos = scandir($rutaDir);

    foreach ($archivos as $archivo) {
        if (strpos($archivo, $nombreBuscado) !== false) {
            echo $archivo . "<br>";
        }
    }
}

if (isset($_POST["crear"])) {
    $nombreNuevo = $_POST["nombreNuevo"];
    $contenidoArchivo = "Este es el contenido del nuevo archivo.";

    $nombreNuevo2 = $nombreNuevo; 

    $rutaNueva = "C:/xampp/htdocs/servidor/" . $nombreNuevo2;

    if (file_put_contents($rutaNueva, $contenidoArchivo) !== false) {
        chmod($rutaNueva, 0644); 
        echo "El archivo $nombreNuevo2 se ha creado y escrito con éxito.";
    } else {
        echo "No se pudo crear el archivo.";
    }
}
?>
    
</body>
</html>