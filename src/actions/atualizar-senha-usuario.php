<?php
use Models\Data\Usuario;
require_once '../../vendor/autoload.php';


session_start();

// Inicializamos uma instância da classe de Usuario
$usuario = new Usuario();

if (isset($_POST['inputUpdateName']) && !empty($_POST['inputUpdateName']) && isset($_POST['inputUpdateEmail']) && !empty($_POST['inputUpdateEmail']) && isset($_POST['inputUpdateOldPsw']) && !empty($_POST['inputUpdateOldPsw']) && isset($_POST['inputUpdateNewPsw']) && !empty($_POST['inputUpdateNewPsw'])) {
    require '../../config.php';

    $userName = addslashes($_POST['inputUpdateName']);
    $userEmail = addslashes($_POST['inputUpdateEmail']);
    $userOldPsw = addslashes($_POST['inputUpdateOldPsw']);
    $userNewPsw = addslashes($_POST['inputUpdateNewPsw']);

    $usuario->ForgotPassword($userName, $userEmail, $userOldPsw, $userNewPsw);
    header('Location: ../Views/tela-login.php');
}

?>
