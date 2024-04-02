<?php

$texto = "Valor da variável";
$numero = 2024;
$decimal = 5.5;
$booleano = true;

echo "Variavel de texto $texto<br>";
echo "Variavel numérica $numero<br>";
echo "Variavel float (flutuante) $decimal<br>";
echo "Variavel booleana $booleano<br>";

echo "<hr>";
echo "<h1>Declarando constantes</h1>";

const NOME = "Kevin Martins";
echo NOME;

echo "<h1>Outra forma de declaração da constante</h1>";

define("NOME2", "Joice Soares");
echo NOME2;

echo "<hr>";
echo "<h1>Manipulação de strings</h1>";

$frase = "Viva hoje";
//Tamanho da variavel
echo strlen($frase);
echo strstr($frase, "hoje");
echo strpos($frase, "hoje");
echo str_replace("hoje", "sempre", $frase);