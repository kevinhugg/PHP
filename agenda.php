<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
</head>
<body>

    <?php
    
        $host = "localhost";//ou o ip local do localhost  127.0.0.1
        $banco = "agenda";
        $conexao = new PDO("mysql:host=$host;dbname=$banco", 'root', '');

        if(!$conexao){ //Se não conectar
            echo "Ixiiii, deu ruim!";
        }

        $select = $conexao->query("select * from contatos");
        // $resultado = $select->fetch(PDO::FETCH_ASSOC);
        // while($resultado = $select->fetch(PDO::FETCH_ASSOC)) {
        //     echo $resultado['nome']. "<br>";
        // };

        // buscando tudo junto
        // echo "<pre>";
        // print_r($resultado);

        // buscando separado
        // echo $resultado['nome'];

    ?>

    <h1>Agenda de contatos</h1>

    <table>

        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
        </thead>

        <tbody>
            <?php
            
            while($resultado = $select->fetch(PDO::FETCH_ASSOC)) {
                // echo $resultado['nome']. "<br>";
                echo '
                <tr>
                    <th>' . $resultado['id_tabela'] . '</th>
                    <th>' . $resultado['nome'] . '</th>
                    <th>' . $resultado['email'] . '</th>
                    <th>' . $resultado['senha'] . '</th>
                </tr>';
            }

            ?>
        </tbody>

    </table>
    
</body>
</html>