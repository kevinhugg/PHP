<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="pokemon" placeholder="Digite o pokemon">
    <button type="submit">Ver</button>
</form>

    
    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $pokemon = urlencode($_POST['pokemon']);
        $url = "https://pokeapi.co/api/v2/pokemon/$pokemon";

        $resposta = file_get_contents($url);
        $informacoes = json_decode($resposta, true);

        $nome = $informacoes['forms']['0']['name'];
        
        


        echo "<pre>";
        print_r($nome);
        // echo '<div>Nome: '. $nome. '</div>';
        // echo '<div>Tempo: '.$tempo.'<div>';
        // echo '<div>'.$temperatura.'°<div>';
        // echo '<div><img src="'.$icone.'"><div>';

    };

    ?>

</body>
</html>
