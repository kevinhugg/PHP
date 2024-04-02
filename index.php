<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
</head>
<body>

    <?php

        //Comentário de uma linha única
        #Comentário de linha única
        /*
        Comentário de multiplas linhas
        */
        //imprimir um texto na tela echo ou print


        echo "Olá mundo";


        //Declaração de variáveis em PHP
        /*
        - Nomes não podem ter espaçamento
        - Sem caracteres especiais
        - Não iniciar com números X $4variável
        - Pode iniciar com _underline
        - Toda variável deve ter $ no início para identificação
        */

        $nome= "Maria";


        //Operadores aritméticos
        //Adição: +   ($n1 + $n2)
        //Subtração: -   ($n1 - $n2)
        //Multiplicação: *   ($n1 * $n2)
        //Divisão: /  ($n1 / $n2)
        //Resto da divisão % ($n1 % $n2)
        //Potência ** ($n1 ** $n2)


        //Operadores de atribuição
        // = ($X = 2)
        // += ($X += 1  |  $X = $X + 1) = 3
        // -= ($X -= 1  |  $X = $X - 1) = 1
        // *= ($X *= 1  |  $X = $X * 1) = 2
        // /= ($X /= 1  |  $X = $X / 1) = 2

        //Operadores de comparação
        // == Igual
        // === Idêntico
        // != Não igual
        // <> Diferente
        // !== Não idêntico
        // > Maior que
        // < Menor que
        // >= Maior ou igual
        // <= Menor ou igual
        // <=> comparar se é menor(-1), igual(0) ou maior(1)
        
        // Operadores Incremento e Decremento
        // ++$n Pré incremento (Adiciona UM antes de imprimir na tela)
        // $n++ Pós incremento (Adiciona UM depois de imprimir na tela)
        // --$n Pré decremento (Subtrai UM antes de imprimir na tela)
        // $n-- Pós decremento (Subtrai UM depois de imprimir na tela)

        //Operadores lògicos
        // and OU && (Verdadeiro se duas expressões forem verdadeiras)
        // or OU || (Verdadeiro se pelo menos uma expressão for verdadeira)
        // ! NÃO (Verdadeiro se $n não for verdadeiro)
        // xor (Retorna verdadeiro se 1 ou 2 expressões forem verdadeiras)
        
        //Operadores de string 
        // . Concatenação (Somar textos)
        // .= Concatenação (soma textos com variáveis)

        //Operador de comparação ternário
        // ?: $n = true? : "Verdadeiro" : "Falso";
        //?? echo true ?? "verdadeiro";
        
        //Pasta do xampp HTDocs


        
    ?>



    <?="Texto"?> <!--Imprimir texto rápido-->

</body>
</html>