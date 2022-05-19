<?php

// IMPORTS
namespace Models\Data;
require_once "../../config.php";


class Usuario {
    // TODO


    #region PUBLIC METHODS
    public function Login($email, $senha) {
        global $pdo;

        $sql = "SELECT * FROM usuario
                WHERE EMAIL = :email AND SENHA = :senha";

        // Prepara uma Query SQL para ser executada
        $sql = $pdo->prepare($sql);

        // Define os valores informados na query baseados em uma variável,
        // neste caso, os parâmetros da função
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);

        // Executa propriamente a Query
        $sql->execute();

        // Se a quantidade de resultados retornados com a Query for maior que 0,
        // significa que os dados inseridos no login estavam corretos
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            // Uso apenas para teste, mostra os dados do usuário na tela
            echo $data['USUARIOID'] . '<br>';
            echo $data['NOME'] . '<br>';
            echo $data['EMAIL'] . '<br>';
            echo $data['SENHA'] . '<br>';
            echo $data['IS_ACTIVE'] . '<br>';

            // Cria-se uma sessão para o usuário
            $_SESSION['ID_User'] = $data['USUARIOID'];
            return true;
        }
        else {
            echo 'ERRO';
            return false;
        }
    }
    #endregion PUBLIC METHODS

    #region PRIVATE METHODS

    #endregion PRIVATE METHODS

}

?>