<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <!--Crie um formulário que receba um número e exiba na tela se o número digitado é par ou ímpar. 
Entrada: Número; Saída: “Número digitado __, ele é _____________”.-->

<h1>Identificar se um número é ímpar ou par</h1>

<form action="" method="POST">

<label for="numero">Número:</label>
<input type="number" name="numero" id="numero">

<button type="submit">Enviar</button>

</form>
    
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $numero =  $_POST['numero'] ;
    $resto = $numero % 2;

    if(strlen($numero) == 0){
      
        echo "Sem dados. Insira um número!";
}
    if($resto == 0){
        echo "O valor digitado foi: ".$numero." e ele é par";
    } else {
        echo "O valor digitado foi: ".$numero." e ele é ímpar";
    }

}


?>
    
</body>
</html>