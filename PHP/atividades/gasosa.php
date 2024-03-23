<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>

<h1>Calcular o preço da gasolina</h1>

<!-- Crie um formulário que receba o valor da gasolina e quanto a pessoa tem em dinheiro, 
exiba na tela quantos litros de gasolina ela pode comprar. Entrada: valor da gasolina, 
valor em dinheiro;
Saída: “Você tem _____ e pode comprar ____ litros de gasolina”.-->

<form action="" method="POST">
    
    <label for="gasolina">Gasolina(ml):</label>
    <input type="number" name="gaso" id="gaso">

    <label for="Dinheiro">Dinheiro:</label>
    <input type="Number" name="dim" id="dim">

    <button type="submit">Enviar</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $gaso = $_POST['gaso'];
    $dim = $_POST['dim'];

    if(strlen($gaso) == 0){

        echo "Insira o preço da gasolina por favor!!";

    }

    if(strlen($dim) == 0){

        echo "Insira o dinheiro a ser utilizado por favor!!";

    }
    $l = $dim / $gaso;

    echo "Você tem: R$".$dim.". E pode comprar: ".$l."ml de gasolina";
}

?>
    
</body>
</html>