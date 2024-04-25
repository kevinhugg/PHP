<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Utilize foreach </title>
</head>
<body>

    <h1> Áreas </h1>

    <?php

        $areas = [
            ['Programador'
        ],
            ['Banco de dados'
        ],
            ['Suporte técnico'
        ],
            ['Segurança da informação'
        ]
        ];

        for($i=0; $i< count($areas); $i++){
            foreach($areas[$i] as $ch ) {
                echo '<br>';
                echo $ch;
            }
            echo '<hr>';
        };

    ?>
    
</body>
</html>