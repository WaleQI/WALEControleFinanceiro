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
                    <a href="tela-inicio.php" class="mx-2 p-2 text-decoration-none header-option">INÍCIO</a>
                    <a href="tela-registros.php" class="mx-2 p-2 text-decoration-none header-option active-option">REGISTROS</a>
                    <a href="tela-previsoes.php" class="mx-2 p-2 text-decoration-none header-option">PREVISÕES</a>
                </div>

                <div class="header-profile-content">
                    <a href="tela-perfil-usuario.php" class="profile-option rounded-circle"> <img src="../assets/perfil4.jpg" alt="imagem-de-perfil" width="50px" height="50px" class="rounded-circle"> </a>
                </div>
            </div>
        </header>

        <div class="body-content row d-flex align-items-center justify-content-center">
            <div class="side-menu col-3 h-100 pe-0">
                <div class="side-menu-content w-100 h-100 p-3 d-flex flex-column align-items-center justify-content-start">
                    <div class="menu-filters w-100 h-100 d-flex flex-column">
                        <form action="tela-registros.php" method="POST">
                            <div class="inputs">
                                <div class="col-12 mb-3">
                                    <label for="filterDescricao">Descrição</label>
                                    <input type="text" name="filterDescricao" id="filterDescricao" class="form-control dark-input" placeholder="Filtre pela descrição">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="filterResp">Responsável</label>
                                    <input type="text" name="filterResp" id="filterResp" class="form-control dark-input" placeholder="Filtre pelo responsável">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="filterValor">Valor</label>
                                    <input type="number" name="filterValor" id="filterValor" class="form-control dark-input" placeholder="Filtre pelo valor">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="filterDT">Data/Hora</label>
                                    <input type="datetime-local" name="filterDT" id="filterDT" class="form-control dark-input" placeholder="Filtre pela data e hora">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="filterTipo">Tipo de registro</label>
                                    <select class="form-select dark-input" aria-label="Entrada ou Saída">
                                        <option value=null>-- Selecione o tipo de registro</option>
                                        <option value="entradas">Entradas</option>
                                        <option value="saidas">Saídas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="action-btn">
                                <button type="submit" class="btn fw-bold">FILTRAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="main-container col-9 p-0">
                <div class="main-container-content w-100 h-100 p-3">

                </div>
            </div>
        </div>

    </body>
</html>
