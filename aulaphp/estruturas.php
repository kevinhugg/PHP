<?php

echo "<h1>Estruturas Condicionais</h1>";

echo "if(condição){Código}";
if(1==1) {
    echo "Verdadeiro";
} elseif (1==2){
    echo "Falso";
} else {
    echo "Terceira opção";
}

echo "<h1>Estruturas de repetição</h1>";

echo "while (enquanto), for(para) e foreach()<br>";
$indice = 0;
while($indice<=5) {
    echo $indice."<br>";
    $indice++;
}

echo "FOR<br>";

for($i=0;$i<=10;$i++){

    echo "<h3></h3>";
    for($j=2;$j<=10;$j++){
        echo "$i X".$j." = ".($j*$i)."<br>";
    }

    echo "2 X ".$i." = ".(2*$i)."<br>";

}

$carros = ["Celta", "Ka", "HB20", "Peugeot"];
echo $carros[0];

foreach($carros as $x){
    echo $x."<br>";
}

$pessoa = ["nome"=>"Kevin", "cargo"=>"Aluno"];
foreach($pessoa as $chave => $valor){
    echo "$chave: $valor";
}