<?php
    $guid = GUID();

    function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        } else {
            return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
        }

        return "{Geração de GUID falha!}";
    }

    echo "<p>O GUID é: " . $guid . "</p>";
    
    #region Conexão com o banco
    
    $serverName = "localhost";
    $userName = "root";
    $password = "mDB_C0nn|";
    $dbName = "wl_finan";

    try {
        // Cria-se um novo objeto para realizar as funções de 
        $pdo = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
        $query = "SELECT * FROM usuario ORDER BY usuario.NOME ASC";

        $d = $pdo->query($query);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection succesful!";
    }
    catch(PDOException $ex) {
        echo "Error in connection " . $ex->getMessage();
    }

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
