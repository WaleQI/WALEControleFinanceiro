<?php

namespace Models\Data;

// IMPORTS
use Models\Utils\Generators;
use PDOException;
require_once "../../config.php";


class Usuario {
    // TODO


    #region PUBLIC METHODS

    public function Login($email, $senha) {
        global $pdo;

        $query = "SELECT * FROM usuario
                WHERE EMAIL = :email AND SENHA = :senha";

        // Prepara uma Query SQL para ser executada
        $query = $pdo->prepare($query);

        // Define os valores informados na query baseados em uma variável,
        // neste caso, os parâmetros da função
        $query->bindValue("email", $email);
        $query->bindValue("senha", $senha);

        // Executa propriamente a Query
        $query->execute();

        // Se a quantidade de resultados retornados com a Query for maior que 0,
        // significa que os dados inseridos no login estavam corretos
        if ($query->rowCount() > 0) {
            $data = $query->fetch();

            // Uso apenas para teste, mostra os dados do usuário na tela
            echo $data['USUARIOID'] . '<br>';
            echo $data['NOME'] . '<br>';
            echo $data['EMAIL'] . '<br>';
            echo $data['SENHA'] . '<br>';
            echo $data['IS_ACTIVE'] . '<br>';

            // Cria-se uma sessão para o usuário
            $_SESSION['user-data'] = $data;
            return true;
        }
        else {
            echo 'ERRO';
            return false;
        }
    }


    public function SignIn($nome, $email, $password) {
        global $pdo;

        // Inicializamos uma instância da classe de Geradores, com o objetivo de
        // criar um GUID que será armazenado na coluna do Banco de Dados.
        $generator = new Generators();
        $guid1 = $generator->generateGUIDv1();
        $guid2 = $generator->generateGUIDv2();

        try {
            $query = "INSERT INTO usuario(USUARIOID, NOME, EMAIL, SENHA, IS_ACTIVE)
                      VALUES (:usuarioid, :nome, :email, :senha, :is_active)";
        
            $query = $pdo->prepare($query);

            // Verificação dos geradores para que caso um não funcione,
            // haverá uma segunda opção.
            if (!empty($guid1) && $guid1 != null) {
                $query->bindValue("usuarioid", $guid1);
            }
            else {
                $query->bindValue("usuarioid", $guid2);
            }

            $query->bindValue("nome", $nome);
            $query->bindValue("email", $email);
            $query->bindValue("senha", $password);
            $query->bindValue("is_active", 1);

            $query->execute();
            return true;
        }
        catch (PDOException $ex) {
            echo "Ocorreu um erro ao tentar realizar a requisição com o servidor. A seguinte mensagem foi retornada: ".$ex->getMessage();
            return false;
        }
    }


    public function ForgotPassword($nome, $email, $senhaAntiga, $senhaNova) {
        global $pdo;

        try {
            $selectQuery = "SELECT * FROM usuario
                            WHERE NOME = :nome AND
                                  EMAIL = :email AND
                                  SENHA = :senhaAntiga";
            
            $selectQuery = $pdo->prepare($selectQuery);

            $selectQuery->bindValue("nome", $nome);
            $selectQuery->bindValue("email", $email);
            $selectQuery->bindValue("senhaAntiga", $senhaAntiga);

            $selectQuery->execute();


            if ($selectQuery->rowCount() > 0) {
                $updateQuery = "UPDATE usuario
                                SET SENHA = :senhaNova
                                WHERE NOME = :nome AND
                                EMAIL = :email AND
                                SENHA = :senhaAntiga";
                
                $updateQuery = $pdo->prepare($updateQuery);

                $updateQuery->bindValue("senhaNova", $senhaNova);
                $updateQuery->bindValue("nome", $nome);
                $updateQuery->bindValue("email", $email);
                $updateQuery->bindValue("senhaAntiga", $senhaAntiga);

                $updateQuery->execute();
            }
        }
        catch(PDOException $ex) {
            var_dump($ex);
            return false;
        }
    }

    #endregion PUBLIC METHODS


    #region PRIVATE METHODS
    // [. . .]
    #endregion PRIVATE METHODS

}

?>