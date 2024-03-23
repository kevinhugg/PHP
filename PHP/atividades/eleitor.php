<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>

<h1>Dizer se a pessoa pode votar</h1>

<!-- Crie um formulário que receba a idade de uma pessoa. Exiba na tela se pode votar, 
se é obrigatório ou não pode votar de acordo com a idade digitada. Considere: Se idade 
é menor que 16: Não pode votar. Se idade é 16 ou 17: é opcional votar. Se for maior que 
18 é obrigatório votar. 
Entrada: idade;  Saída: “____ anos, [opcional, obrigatório, não pode] votar”-->

<form action="" method="POST">
    
    <label for="idade">idade:</label>
    <input type="number" name="idade" id="idade">

    <label for="nome">nome:</label>
    <input type="text" name="nome" id="nome">

    <button type="submit">Enviar</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idade = $_POST['idade'];
    $nome = $_POST['nome'];

    if(strlen($idade) == 0){
        echo "Insira a sua idade por favor!!";
    }
    if($idade>=18){

        echo "Olá ".$nome.". Você tem: ".$idade." anos. Você é obrigado a votar!!";

    } elseif($idade<=15){

        echo "Olá ".$nome.". Você tem: ".$idade. " anos. Você não pode votar!!";

    } else{

        echo "Olá ".$nome.". Você tem: ".$idade. " anos. Você pode votar!!";

    }
}

?>
    
</body>
</html>