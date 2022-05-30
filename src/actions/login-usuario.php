<?php
use Models\Data\Usuario;
use Models\Data\Perfil;
require_once '../../vendor/autoload.php';


session_start();

// Inicializamos uma instância da classe de Usuario e de Perfil
$usuario = new Usuario();
$perfil = new Perfil();


// Fazemos uma verificação inicial se os dados que foram recebidos foram preenchidos ou não
if (isset($_POST['inputUserEmail']) && !empty($_POST['inputUserEmail']) && isset($_POST['inputUserPsw']) && !empty($_POST['inputUserPsw'])) {
    require '../../config.php';

    // Inicializa e já define as variáveis
    $userEmail = addslashes($_POST['inputUserEmail']);
    $userPassword = addslashes($_POST['inputUserPsw']);

    
    // Verificamos se a Query retornou algum dado.
    // Se sim, redirecionamos o usuário para a tela de Início, caso contrário, mostraremos uma mensagem de erro
    if ($usuario->Login($userEmail, $userPassword) && $perfil->AccessProfile('Perfil pessoal', 'pessoal')) {
        if (isset($_SESSION['user-data']) && isset($_SESSION['profile-data'])) {
            ProceedToNext();
        }
        else {
            KeepView();
        }
    }

    else {
        KeepView();
    }
}

else {
    KeepView();
}



function KeepView() {
    header('Location: ../Views/tela-login.php');
}

function ProceedToNext() {
    header('Location: ../Views/tela-registros.php');
}

?>