<?php

//Cria a variável array
$dados = [];
$erro = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(isset($nome) && isset($email) && isset($senha)){
        
        $arquivo = "banco.json";

        //Varifica se o arquivo existe
        if(file_exists($arquivo)){

            //Se existir salva od dados dentro da variável $dados
            $extrair_dados = file_get_contents($arquivo);
            //Decodifica os dados em um array associativo
            $dados = json_decode($extrair_dados, true);

        };

        //pega os dados do formulário e crio um novo array
        $novo_registro = [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha
        ];

        //Adiciona os dados novos ao array na variável $dados
        $dados[] = $novo_registro;
        //Salva o arquivo json com todos os dados novamente
        file_put_contents($arquivo, json_encode($dados));
        //Redireciona a pagina para forms.php
        header('location: forms.php?msg=registro salvo');

    } else {

        $erro = "Preencha TODOS os campos";
        header('location: forms.php?errro='.$erro);

    };

};