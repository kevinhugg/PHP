<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>

<h1>calcular o troco de uma compra</h1>

<!-- Crie um formulário que receba nome do produto, valor unitário e quantidade de 
produtos e quanto a pessoa deu em dinheiro para pagar a compra, ao enviar o formulário 
exiba na tela valor a pagar, se tem troco e quanto é o troco da pessoa. (Pagamento apenas em dinheiro,
 não aceite outro meio).
Entrada: nome do produto, valor unitário, quantidade e valor em dinheiro;

Saída: Produto ______________

      Valor Unitário:  R$ ___________
      Total a pagar:   R$ ___________
      Troco:                R$ __________-->


<form action="" method="POST">
    
    <label for="gasolina">Valor da compra:</label>
    <input type="number" name="valcomp" id="valcomp">

    <label for="Dinheiro">Dinheiro recebido:</label>
    <input type="Number" name="dim" id="dim">

    <button type="submit">Enviar</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $valcomp = $_POST['valcomp'];
    $dim = $_POST['dim'];

    if(strlen($valcomp) == 0){

        echo "Insira o valor da compra por favor!!";

    }

    if(strlen($dim) == 0){

        echo "Insira o o valor recebido por favor!!";

    }
    if($dim<$valcomp) {

    $troco = $dim - $valcomp;
    
        echo "Não tem troco para o valor recebido, pois o cliente te deve R$".$troco;
        echo "<br>";
        
    } else {

    echo "O valor da compra foi: R$".$valcomp;
    echo "<br>";
    echo "O valor recebido foi: R$".$dim;
    echo "<br>";
    echo "O valor do troco será: R$".$troco;
    }
}

?>
    
</body>
</html>