<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>potência</title>
</head>
<body>

<h1> 2 - Potência </h1>

<form action="" method="POST">
    
<label for="numero">Número 1:</label>
<input type="number" name="base" id="base">

<label for="numero">Número 2:</label>
<input type="number" name="expo" id="expo">

<button type="submit">Enviar</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $base = $_POST["base"];
    $expo = $_POST["expo"];

}

    function potencia($base,$expo){

    echo pow($base,$expo);

}

    potencia($base,$expo);

?>
    
</body>
</html>