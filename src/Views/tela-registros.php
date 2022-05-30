<?php
use Models\Data\Perfil;
require_once '../../vendor/autoload.php';


// Iniciamos a SESSION para poder usar seus dados que foram inseridos na página anterior
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../styles/home.css">
    <?php echo '<title>' . $_SESSION['profile-data']['NOME'] . ' | Registros' . '</title>'; ?>
</head>
    <body>

        <header class="header" id="header">
            <div class="header-area h-100 d-flex flex-row align-items-center justify-content-between">
                <div class="header-title-content d-flex flex-row">
                    <div class="logo-image">
                        <img src="../assets/walelogo.png" alt="Logo WALE" width="100" height="100">
                    </div>
                    <div class="name-content d-flex align-items-center">
                        <span>Wale</span>
                    </div>
                </div>

                <div class="header-options-content d-flex align-items-center">
                    <a href="tela-inicio.php" class="mx-2 p-2 text-decoration-none header-menu-option">INÍCIO</a>
                    <a href="tela-registros.php" class="mx-2 p-2 text-decoration-none header-menu-option active-menu-option">REGISTROS</a>
                    <a href="tela-previsoes.php" class="mx-2 p-2 text-decoration-none header-menu-option">PREVISÕES</a>
                </div>

                <div class="header-profile-content">
                    <a href="tela-perfil-usuario.php" class="profile-option rounded-circle"> <img src="../assets/perfil4.jpg" alt="imagem-de-perfil" width="50px" height="50px" class="rounded-circle"> </a>
                </div>
            </div>
        </header>

        <div class="body-content d-flex align-items-center justify-content-center">
            <div class="main-wrapper">

            </div>
        </div>

    </body>
</html>
