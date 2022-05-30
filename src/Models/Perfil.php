<?php

namespace Models\Data;

// IMPORTS
use Models\Utils\Generators;
use PDO;
use PDOException;
require_once "../../config.php";


class Perfil {
    // TODO


    #region PUBLIC METHODS

    public function GetProfiles($usuarioId) {
        global $pdo;

        $query = "SELECT * FROM perfil
                WHERE USUARIO_ID = :usuarioId";
        
        $query = $pdo->prepare($query);
        $query->bindValue("usuarioId", $usuarioId);

        $query->execute();

        $data = $query->fetchAll(PDO::FETCH_CLASS);


        return $data;
    }


    public function AccessProfile($nome, $senha) {
        global $pdo;

        $query = "SELECT * FROM perfil
                WHERE NOME = :nome AND SENHA = :senha";
        
        // Prepara uma Query SQL para ser executada
        $query = $pdo->prepare($query);

        // Define os valores informados na query baseados em uma variável,
        // neste caso, os parâmetros da função
        $query->bindValue("nome", $nome);
        $query->bindValue("senha", $senha);

        // Executa propriamente a Query
        $query->execute();

        // Se a quantidade de resultados retornados com a Query for maior que 0,
        // significa que os dados inseridos para acesso estavam corretos
        if ($query->rowCount() > 0) {
            $data = $query->fetch();

            $_SESSION['profile-data'] = $data;
            return true;
        }
        else {
            echo 'ERRO';
            return false;
        }
    }


    public function InsertProfile($usuarioId, $tipoId, $nomePerfil, $senhaPerfil) {
        global $pdo;

        $generator = new Generators();
        $guid1 = $generator->generateGUIDv1();
        $guid2 = $generator->generateGUIDv2();

        try {
            $query = "INSERT INTO perfil(PERFILID, USUARIO_ID, TIPO_PERFILID, NOME, SENHA)
                      VALUES (:perfilId, :usuarioId, :tipoId, :nome, :senha)";
            
            $query = $pdo->prepare($query);

            if (!empty($guid1) && $guid1 != null) {
                $query->bindValue("perfilId", $guid1);
            }
            else {
                $query->bindValue("perfilId", $guid2);
            }

            $query->bindValue("usuarioId", $usuarioId);
            $query->bindValue("tipoId", $tipoId);
            $query->bindValue("nome", $nomePerfil);
            $query->bindValue("senha", $senhaPerfil);

            $query->execute();
            return true;
        }
        catch (PDOException $ex) {
            echo "Ocorreu um erro ao tentar realizar a requisição com o servidor. A seguinte mensagem foi retornada: ".$ex->getMessage();
            return false;
        }
    }

    #endregion PUBLIC METHODS


    #region PRIVATE METHODS
    // [. . .]
    #endregion PRIVATE METHODS
}

?>