<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Utilize while </title>
</head>
<body>

    <h1> Linguagens Back-end </h1>

    <?php

        $backend = [
            ['lang1'=>'Python'
        ],
            ['lang1'=>'JAvascript(com NodeJS)'
        ],
            ['lang1'=>'Typescript'
        ],
            ['lang1'=>'Java'
        ],
            ['lang1'=>'C'
        ],
        ];

        for($i=0; $i< count($backend); $i++){
            foreach($backend[$i] as $back) {
                echo '<br>';
                echo $back;
            }
            echo '<hr>';
        };

    ?>
    
</body>
</html>