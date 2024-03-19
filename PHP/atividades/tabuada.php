<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <!--2. Crie um formulário que solicite um número inteiro, e exiba a tabuada de
     0 a 10 de acordo com o número digitado. Entrada: número inteiro; Saída: (ex.: 2) 

Tabuada do número 2

      2 X 0    = 0
      2 X 1    = 2
      …
      2 X 10  = 20-->

<h1>Fazer a tabuada do número inserido</h1>

<form action="" method="POST">

<label for="numero">Número:</label>
<input type="number" name="numero" id="numero">

<button type="submit">Enviar</button>

</form>
    
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $numero =  $_POST['numero'] ;

    if(strlen($numero) == 0){
      
        echo "Sem dados. Insira um número!";
}
    for($i = 0; $i <= 10; $i++) {

        $cont = $i*$numero;

        echo $i."X".$numero."=".$cont;
        echo"<br>";
    }

}


?>
    
</body>
</html>