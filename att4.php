<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Utilize multidimensional </title>
</head>
<body>

    <h1> Multidimensional </h1>

    <?php

        $multi = [
            [
                'Área'=>'Programador',
                'Recurso principal'=>'HTML e CSS',
                'Salário'=>'R$8.400,00',
            ],
            [
                'Área'=>'Banco de dados',
                'Recurso principal'=>'MySQL',
                'Salário'=>'R$6.700,00',
            ],
            [
                'Área'=>'Suporte técnico',
                'Recurso principal'=>'Github',
                'Salário'=>'R$3.500,00',
            ],
        ];

        for($i=0; $i< count($multi); $i++){
            foreach($multi[$i] as $ch => $vl) {
                echo '<br>';
                echo $ch. ': '. $vl;
            }
            echo '<hr>';
        };

    ?>
    
</body>
</html>