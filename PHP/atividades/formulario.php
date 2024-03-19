<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<!--Crie um formulário que receba um número e verifique se esse valor é positivo, 
negativo ou igual a zero. Exiba na tela "Valor Positivo", "Valor Negativo" ou "Igual a 
Zero". Entrada: numero; Saída: "Número digitado __ , ele é ________"*/-->

<h1>Número negativo, positivo ou neutro</h1>

<form action="" method="POST">

<label for="numero">Número:</label>
<input type="number" name="numero" id="numero">

<button type="submit">Enviar</button>

</form>
    
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $numero =  $_POST["numero"] ;

if(strlen($numero) == 0){

    echo "Sem dados. Insira um número!";

}else {
        if($numero > 0){
            echo "O número digitado foi: ".$numero .", e ele é positivo";
        } elseif ($numero < 0) {
            echo "O número digitado foi: ".$numero .", e ele é negativo";
        } else {
            echo "O número digitado foi: ".$numero .", e ele é neutro(igual a zero)";
        }
    }
}



?>

</body>
</html>