<?php
use Models\Utils\Conexao;
require_once '../vendor/autoload.php';


    // Instancia a classe de Conexão com o Banco
    $conexao = new Conexao();
    
    #region Conexão com o banco
    if ($conexao->defineConnection($serverName, $userName, $password, $dbName) != false || $conexao->defineConnection($serverName, $userName, $password, $dbName) != null) {
        $query = "SELECT * FROM usuario ORDER BY usuario.NOME ASC";
        $pdo = $conexao->defineConnection($serverName, $userName, $password, $dbName);
        $d = $pdo->query($query);
    }
    else { }
    #endregion Conexão com o banco
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="src/style.css">
        <title>Tabela com usuários</title>
    </head>

    <body class="p-3">
        <table class="table table-hover table-dark mt-5" border="3" cellpading="5" cellspacing="5" align="center">
            <tr>
                <th class="table-dark">USUARIOID</th>
                <th class="table-dark">NOME</th>
                <th class="table-dark">EMAIL</th>
                <th class="table-dark">SENHA</th>
                <th class="table-dark">IS_ACTIVE</th>
            </tr>

            <?php foreach($d as $data) { ?>
            <tr>
                <td class="table-dark"> <?php echo $data['USUARIOID']; ?> </td>
                <td class="table-dark"> <?php echo $data['NOME']; ?> </td>
                <td class="table-dark"> <?php echo $data['EMAIL']; ?> </td>
                <td class="table-dark"> <?php echo $data['SENHA']; ?> </td>
                <td class="table-dark"> <?php echo $data['IS_ACTIVE']; ?> </td>
            </tr>
            <?php } ?>
        </table>
    </body>

</html>
