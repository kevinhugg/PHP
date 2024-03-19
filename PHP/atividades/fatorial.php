<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>

<h1>Fazer a conta fatorial do número inserido</h1>

<!--3. Crie um formulário que solicite um número inteiro, 
faça o cálculo fatorial desse número, exiba o resultado na tela. 
Entrada: Número inteiro (ex.: 7); Saída: !7= * 6*5*4*3*2*1-5040.-->

<form action="" method="POST">
    
    <label for="numero">Número:</label>
    <input type="number" name="num" id="num">

    <button type="submit">Enviar</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $num = $_POST['num'];

    if(strlen($num) == 0){
        echo "Insira um valor por favor!!";
    }

    for($i=$num; $i>0; $i){

        $res = $num * $i;

        echo "!".$num."=".$i."ou seja !".$num."=".$res;
        echo "<br>";

    }

}

?>
    
</body>
</html>