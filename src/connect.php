<?php
use Models\Utils\Database;
require_once '../vendor/autoload.php';


    // Instancia a classe de Conexão com o Banco
    $conexao = new Database();
    
    #region Conexão com o banco
    $query = 'SELECT * FROM usuario';
    $data = $conexao->select($query);
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

            <?php foreach($data as $row) { ?>
            <tr>
                <td class="table-dark"> <?php echo $row->USUARIOID; ?> </td>
                <td class="table-dark"> <?php echo $row->NOME; ?> </td>
                <td class="table-dark"> <?php echo $row->EMAIL; ?> </td>
                <td class="table-dark"> <?php echo $row->SENHA; ?> </td>
                <td class="table-dark"> <?php echo $row->IS_ACTIVE; ?> </td>
            </tr>
            <?php } ?>
        </table>
    </body>

</html>
