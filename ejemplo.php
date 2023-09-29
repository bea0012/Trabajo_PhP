<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var1=1;
        $var2=2;
        $var1 = $var2;
        echo $var1;
        echo " ";
        $var2=3;
        echo $var1;

        $var1=1;
        $var2=2;
        $var1 = &$var2;
        echo $var1;
        echo " ";
        $var2=3;
        echo $var1;
    ?>
</body>
</html>