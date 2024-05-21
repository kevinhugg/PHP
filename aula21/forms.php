<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Cadastro json</title>
</head>
<body>

    <h1>Cadastro de pessoas</h1>

    <form method="POST" action="salva.php">

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>

        <div>
            <button type="submit">SALVAR</button>
        </div>

        <div>
            <?php
                $msg = isset($_GET['msg'])?$_GET['msg']:'';
                echo $msg;
            ?>
        </div>

    </form>

    <div>

        <h2>Listar Pessoas</h2>

        <?php
            $arquivo = "banco.json";
            $extrair_dados = file_get_contents($arquivo);
            $dados = json_decode($extrair_dados, true);
        ?>    

        <table>

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

            <?php
                foreach($dados as $id => $valor);
            ?>

                <tr>
                    <td> <?=$id?> </td>
                    <td> <?=$valor['nome']?> </td>
                    <td> <?=$valor['email']?> </td>
                    <td> <?=$valor['senha']?> </td>
                    <td>
                        <a href="edita.php<?=$id?>"> Editar </a> 
                        <a href="apaga.php<?=$id?>"> Apagar </a>
                    </td>
                </tr>
            </tbody>

        </table>

    </div>

</body>
</html>