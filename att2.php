<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Utilize while </title>
</head>
<body>

    <h1> Linguagens frontend </h1>

    <?php

        $i=0; 

        $frontend = [
            ['lang0'=>'HTML'
        ],
            ['lang1'=>'JAvascript'
        ],
            ['lang2'=>'CSS'
        ],
            ['lang3'=>'Vue'
        ],
            ['lang4'=>'SASS'
        ],
        ];

        while($i< count($frontend)){
            foreach($frontend[$i] as $front) {
                echo '<br>';
                echo $front;
                $i++;
            }
            echo '<hr>';
        };

    ?>
    
</body>
</html>