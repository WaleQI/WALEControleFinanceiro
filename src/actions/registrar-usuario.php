<?php
use Models\Data\Usuario;
require_once '../../vendor/autoload.php';


$usuario = new Usuario();

if (isset($_POST['newUserName']) && !empty($_POST['newUserName']) && isset($_POST['newUserEmail']) && !empty($_POST['newUserEmail']) && isset($_POST['newUserPassword']) && !empty($_POST['newUserPassword'])) {
    require '../../config.php';

    $createUserName = addslashes($_POST['newUserName']);
    $createUserEmail = addslashes($_POST['newUserEmail']);
    $createUserPassword = addslashes($_POST['newUserPassword']);

    if ($usuario->SignIn($createUserName, $createUserEmail, $createUserPassword)) {
        header('Location: ../Views/tela-login.php');
    }
}
else {
    header('Location: ../Views/tela-login.php');
}

?>