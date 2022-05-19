<?php
use Models\Data\Usuario;
require_once '../../vendor/autoload.php';


// Inicializamos uma instância da classe de Usuario
$usuario = new Usuario();


// Fazemos uma verificação inicial se os dados que foram recebidos foram preenchidos ou não
if (isset($_POST['inputUserEmail']) && !empty($_POST['inputUserEmail']) && isset($_POST['inputUserPsw']) && !empty($_POST['inputUserPsw'])) {
    require '../../config.php';

    // Inicializa e já define as variáveis
    $userEmail = addslashes($_POST['inputUserEmail']);
    $userPassword = addslashes($_POST['inputUserPsw']);

    // Verificamos se a Query retornou algum dado.
    // Se sim, redirecionamos o usuário para a tela de Perfis, caso contrário, mostraremos uma mensagem de erro
    if ($usuario->Login($userEmail, $userPassword)) {
        if (isset($_SESSION['ID_User'])) {
            header('Location: ../Views/tela-perfis.php');
        }
        else {
            header('Location: ../Views/tela-login.php');
        }
    }
    else {
        header('Location: ../Views/tela-login.php');
        
        // TODO: Definir a mensagem de erro
    }
}
else {
    header('Location: ../Views/tela-login.php');
}

?>