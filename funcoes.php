<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    
    <h1> Funções em PHP </h1>

    <?php

        echo "<p> Funções são blocos de código pré-definidos que podem ser reutilizados
        a qualquer momento.<br>
        Podem ter retorno ou não, podem receber parâmetros ou não.
        
        function nome funcao(){
                código da função
        }

        Uma função é executada quando chamada.
        Chamamos uma função pelo nome <b> nomefuncao();</b>
        </p>";

        //Primeira letra minúscula e as outras maiúsculas
        //função sem parâmetro (argumento) e sem retorno
        function escrevaNaTela(){

            echo "esse texto foi gerado pela função";

        }

        escrevaNaTela();
        //Função com parâmetros
        function somarNumeros($n1, $n2){

            $resultado = $n1 + $n2;
            echo $resultado;

        }

        somarNumeros(5, 15);


        //Função com parâmetro e retorno
        function multiplicar($n1, $n2){

            $resultado = $n1 * $n2;
            return $resultado;

        }

        echo "<hr>";
        $retorno = multiplicar(3, 5);

        echo $retorno;
        echo "<hr>";

        echo sqrt(16); //calcula a raiz de um número
        echo "<hr>";
        echo pow(4,2); // calcula a potencia de um numero 


        function raizQuadrada($n1){

            echo sqrt($n1);

        }

        echo "<hr>";
        raizQuadrada(16);



        function potencia($n1, $n2){

            echo pow($n1, $n2);

        }

        echo "<hr>";
        potencia(3,2);



    ?>
</body>
</html>