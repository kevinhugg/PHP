<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíz Quadrada</title>
</head>
<body>

<h1>1 - Raíz Quadrada</h1>

<form action="" method="POST">

<label for="numero">Número:</label>
<input type="number" name="numero" id="numero">

<button type="submit">Enviar</button>

</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $numero = $_POST["numero"];

}

    function raizQuadrada($numero){

        echo sqrt($numero);

    }
    
    raizQuadrada($numero);


?>
    
</body>
</html>