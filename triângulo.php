<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulos</title>
</head>
<body>

    <h1>Triângulos</h1>

    <form action="" method="POST">

    <label for="numero">Digite o tamanho do primeiro lado:</label>
    <input type="number" name="lado1" id="lado1">

    <label for="numero">Digite o tamanho do segundo lado:</label>
    <input type="number" name="lado2" id="lado2">

    <label for="numero">Digite o tamanho do terceiro lado:</label>
    <input type="number" name="lado3" id="lado3">

    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $lado3 = $_POST["lado3"];

    }

    function triangulo($lado1, $lado2, $lado3){

        if($lado1 == $lado2 && $lado2 == $lado3){

            echo "O triângulo é equilátero";

        } elseif ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
            
            echo "O triângulo é escaleno";

        } else {
            
            echo "O triângulo é isóceles";

        }

    }

    ?>
    
</body>
</html>