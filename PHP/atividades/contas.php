<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <!--Crie um formulário que receba uma operação (soma, subtração, multiplicação ou divisão ou potência) 
    e 2 números. Realize a operação dos números recebidos conforme a solicitação do usuário, exiba a operação 
    escolhida e resultado na tela. Entrada: 2 números, operação aritmética (ex.: 2 * 2); Saída: "Você escolheu
    Multiplicação, o resultado é: 2 * 2 = 4"-->

<h1>Calcular um numero de acordo com a operação escolhida</h1>

<form action="" method="POST">


<label for="operador">Operação:</label>
<input type="text" name="operador" id="operador">

<label for="numero">1° Número:</label>
<input type="number1" name="numero1" id="numero1">

<label for="numero">2° Número:</label>
<input type="number2" name="numero2" id="numero2">

<button type="submit">Enviar</button>

</form>
    
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $op =  $_POST['operador'] ;
    $numero1 =  $_POST['numero1'] ;
    $numero2 =  $_POST['numero2'] ;

    if(strlen($op) == 0){
      
        echo "Sem dados. Insira um número!";

} elseif ($op === "soma"){

    $res = $numero1 + $numero2;
    
    echo "A operação escolhida foi soma o resultado é: ".$numero1. "+".$numero2. "=".$res;
   
}elseif ($op === "subtração"){

    $res = $numero1 - $numero2;
    
    echo "A operação escolhida foi subtração o resultado é: ".$numero1. "-".$numero2. "=".$res;
   
}elseif ($op === "multiplicação"){

    $res = $numero1 * $numero2;
    
    echo "A operação escolhida foi multiplicação o resultado é: ".$numero1. "*".$numero2. "=".$res;
   
}elseif ($op === "divisão"){

    $res = $numero1 / $numero2;
    
    echo "A operação escolhida foi divisão o resultado é: ".$numero1. "/".$numero2. "=".$res;
   
}

}


?>
    
</body>
</html>