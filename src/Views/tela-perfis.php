<?php
use Models\Data\Perfil;
require_once '../../vendor/autoload.php';


// Iniciamos a SESSION para poder usar seus dados que foram inseridos na página anterior
session_start();


// Inicializamos uma instância da classe de Perfil
$perfil = new Perfil();

// Definimos uma variável que armazena a lista de Perfis que vieram do SELECT
$perfisList = $perfil->GetProfiles($_SESSION['user-data']['USUARIOID']);


if (isset($_POST['profilePsw']) && !empty($_POST['profilePsw'])) {
    require '../../config.php';

    $profilePsw = addslashes($_POST['profilePsw']);
}


// Lista de teste
$lista = array('Perfil 1', 'Perfil 2', 'Perfil 3', 'Perfil 2', 'Perfil 3', 'Perfil 2', 'Perfil 3', 'Perfil 1', 'Perfil 2', 'Perfil 3', 'Perfil 2', 'Perfil 3', 'Perfil 2', 'Perfil 3', 'Perfil 1', 'Perfil 2', 'Perfil 3', 'Perfil 2', 'Perfil 3', 'Perfil 2', 'Perfil 3');
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
        <link rel="stylesheet" href="../styles/perfil.css">
        <?php echo '<title>Perfis | ' . $_SESSION['user-data']['NOME'] . '</title>'; ?>
    </head>
    
    <body>

        <header class="header" id="header">
            <div class="header-area">
                <div class="header-content d-flex flex-row">
                    <div class="logo-image">
                        <img src="../assets/walelogo.png" alt="Logo WALE" width="100" height="100">
                    </div>
                    <div class="name-content d-flex align-items-center">
                        <span>Wale</span>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="main-wrapper d-flex align-items-start justify-content-center">
            <div class="main-container row">

                <div class="profiles-list col-7 p-2">
                    <div class="profiles-list-container p-1 d-flex flex-wrap flex-row align-items-start justify-content-evenly">
                        
                        <?php foreach($perfisList as $profile) : ?>
                            <div class="profile-option my-3 p-2">
                                <div class="profile-image"> <div class="image-container"></div> </div>
                                <div class="profile-text d-flex flex-row align-items-center justify-content-between">
                                    <span class="profile-name w-75" style="white-space:nowrap; overflow:hidden; text-overflow: ellipsis;"> <?php echo $profile->NOME ?> </span>
                                    <span class="profile-edit-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffd957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> </span>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>

                    <div class="add-profile-container"></div>
                </div>

                <div class="profiles-info col-5"></div>

            </div>
        </div>


        <!-- MODAL DE ADICIONAR PERFIL -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalTitle">ADICIONAR PERFIL</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="inserrirperfil.php">
                            <div class="row">
                                <div class="mb-3 col-sm-6 d-flex flex-column">
                                    <label for="inputProfileName">Nome/Apelido do perfil</label>
                                    <input type="text" class="form-control" name="inputProfileName" id="inputProfileName">
                                </div>

                                <div class="mb-3 col-sm-6 d-flex flex-column">
                                    <label for="inputProfilePassword">Senha de acesso do perfil</label>
                                    <input type="password" class="form-control" name="inputProfilePassword" id="inputProfilePassword">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="selectProfileType">Tipo de Perfil</label>
                                    <select class="form-select" aria-label="Tipo de perfil">
                                        <option selected> </option>
                                        <option value="1">Pessoal</option>
                                        <option value="2">Profissional</option>
                                        <option value="3">Investidor</option>
                                    </select>
                                    <div id="emailHelp" class="form-text">Selecione aqui o tipo de uso que este perfil terá.</div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                        <a href="../connect.php" type="button" class="btn btn-primary">SALVAR</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
