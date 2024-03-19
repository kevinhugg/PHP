<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis superglobais</title>
</head>
<body>

    <!--<h1>variáveis superglobais</h1>-->
    <h1> Enviar informações por formumlário </h1>

    <form action="" method="post">

    <label for="nome">Nome:</label>
    <input tipe="text" name="nome" id="nome">

    <label for="profissao">Profissão:</label>
    <input tipe="text" name="profissao" id="profissao">

    <label for="idade">Idade:</label>
    <input tipe="number" name="idade" id="idade">

    <button type="submit">Enviar</button>
    
    </form>


    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $erro ="";
    $nome = '';

    if(strlen($nome) > 3) {
    
        $nome = $_POST['nome'];
    
    } else {
        $erro = "NOME INVÁLIDO!!!";
    }

    $profissao = $_POST['profissao'];
    $idade = $_POST['idade'];

    echo $erro."<br>";
    echo "Nome: ".$nome;
    echo "<br>";
    echo "profissao: ".$profissao;
    echo "<br>";
    echo "idade: ".$idade;
    }
    


    /*
    $_POST
    $_GET
    session_start();

    echo "<pre>";

    var_dump($_SECTION);

    echo "</pre>";
    */



    //echo "<pre>";
    //var_dump($_POST)

    ?>
    
</body>
</html>