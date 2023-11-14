<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start(); // para iniciar la sesión antes/nada más  acceder a este y funcione

if (!isset($_SESSION["rol"])) {
    $_SESSION["rol"] = "";
} //aquí damo valor o inicializamos la variable rol en este caso a vacío para luego especificar los roles

if(isset($_POST["login"])){
    $user = $_POST["user"];
    $password = $_POST["pass"];

    validar($user, $password);

    $_SESSION['user'] = $user; //utilizo el session para especificar que la variable user es el usuario con que introducimos la sesion

}

function validar($user, $password) {
    if ($user == "admin" || $user == "cliente1") { //añadimos en esta condición a usuario == cliente1 ya que ahora tenemos 2 usuarios

        if ($password == "1234") {

            echo "Contraseña correcta!";
            $fechaActual = date('Y-m-d');
            $horaActual = date('H:i:s');
            echo " La hora de entrada es: " . $horaActual . " y la fecha es: " . $fechaActual;
        
            if ($user == 'admin') { //añadimos este if para dar un valor a los roles segun seas admin o cliente y después usarlo para mostrar unas u otras opciones
                $_SESSION["rol"] = "admin";
            } else {
                $_SESSION["rol"] = "cliente";
            }

        } else {

            echo "Contraseña incorrecta >:(";
            header('Location: practica4.php');
            exit();
        }

    } else {
        echo " Usuario incorrecto >:( ";
        header('Location: practica4.php');
    }

    if($_SESSION["rol"] == "cliente"){ //es aquí donde especificamos que según el rol que tengan al iniciar sesión se muestra el formulario con todas l.as opciones que tiene admin  y en cliente solo se muestre mostrar url y buscar fichero

        echo '<form method="post">
        <br>
        <p>Ruta actual <input type="submit" name="URL"/> </p>
        <br>
        <br>
        <p>Buscar fichero: <input type="text" name="nombre"/> 
        <input type="submit" name="buscar"/></p>
        <br>
    </form>';

    }elseif ($_SESSION["rol"] == "admin"){

        echo '<form method="post"> <br>
        <p>Ruta actual <input type="submit" name="URL"/> </p>
        <br>
        <br>
        <p>Buscar fichero: <input type="text" name="nombre"/> 
        <input type="submit" name="buscar"/></p>
        <br>
        <br>
        <p>Crea un nuevo fichero: <input type="text" name="nombreNuevo"/> 
        <input type="submit" name="crear"/></p>
        </form>';
    }
}

if (isset($_POST["URL"])) {
    $current_url = getcwd();
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