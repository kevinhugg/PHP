<?php

$key = "bd1d9a3e4ef74e2baa4123817240309";
$cidade = "Sorocaba";
$url = "https://api.weatherapi.com/v1/current.json?key=$key&q=$cidade&aqi=no&lang=pt";

$resposta = file_get_contents($url);
$dados = json_decode($resposta, true);

// echo "<pre>";
// print_r($dados);

echo '<div>'. $dados['location']['name']. '</div>';

?>