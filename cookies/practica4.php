<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="menu.php" method="POST">  /*en esta práctica utilizo el POST por que es que estos datos no son visibles al usuario de la web. En el caso de usar get, 
    el propio usuario podría modificar la URL dando lugar a que la información tratada no sea la prevista */
    <p>Usuario: <input type="text" name="user" size="40"></p>
    <p>Contraseña: <input type="password" name="pass" ></p>
    <input type="submit" name="login" value="Enviar">
</form>

</body>
</html>