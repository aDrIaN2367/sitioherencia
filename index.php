<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POO - herencia - visibilidad - abstract - sobreescritura / override </h1>
    <?php
    require('Perro.php');
    $perro1 = new Perro();
    $perro1->comer();
    $perro1->dormir();


    $gato1 = new Gato();
    $gato1->comer();
    $gato1->dormir();

    ?>
</body>
</html>
