<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="cidade" placeholder="Digite a cidade">
    <button type="submit">Ver</button>
</form>

    
    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $key = "bd1d9a3e4ef74e2baa4123817240309";
        // $cidade = "lisboa";
        //com espaço
        $cidade = urlencode($_POST['cidade']);
        $url = "https://api.weatherapi.com/v1/current.json?key=$key&q=$cidade&aqi=no&lang=pt";

        $resposta = file_get_contents($url);
        $dados = json_decode($resposta, true);

        echo "<pre>";
        print_r($dados);

        $current = $dados['current'];
        $condition = $current['condition'];
        $tempo = $condition['text'];
        $temperatura = $current['temp_c'];
        $icone = $condition['icon'];
        $data = $current['last_updated'];
        // $tempo = $dados['current']['condition']['text'];
        //$temperatura = $dados['current']['temp_c'];

        // pegar data
        // normal             //transforma a data de string para tempo 
        $dia = date('d-m-y', strtotime($data));

        echo '<div>Cidade: '. $dados['location']['name']. '</div>';
        echo '<div>Tempo: '.$tempo.'<div>';
        echo '<div>'.$temperatura.'°<div>';
        echo '<div><img src="'.$icone.'"><div>';

    };

    ?>

</body>
</html>
