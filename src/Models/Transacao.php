<?php

namespace Models\Data;

use PDOException;

require_once "../../config.php";


class Transacao {
    // TODO


    #region Public Methods

    public function NewRecord($tipoTransacao, $usuarioId, $perfilId, $descricao, $responsavel, $valor, $dataHora) {
        global $pdo;

        try {
            if (isset($tipoTransacao)) {
                switch ($tipoTransacao) {
                    case 'Entrada':
                        $query = "INSERT INTO entradas(USUARIO_ID, PERFIL_ID, DESCENTRADA, VALORENTRADA, DATAENTRADA, RESPENTRADA)
                                  VALUE (:usuarioId, :perfilId, :descricao, :valor, :dataHora, :responsavel)";
                        break;
                    
                    case 'Saída':
                        $query = "INSERT INTO saidas(USUARIO_ID, PERFIL_ID, DESCSAIDA, VALORSAIDA, DATASAIDA, RESPSAIDA)
                                  VALUE (:usuarioId, :perfilId, :descricao, :valor, :dataHora, :responsavel)";
                        break;
                }
    
                $query = $pdo->prepare($query);
    
                $query->bindValue("usuarioId", $usuarioId);
                $query->bindValue("perfilId", $perfilId);
                $query->bindValue("descricao", $descricao);
                $query->bindValue("valor", $valor);
                $query->bindValue("dataHora", $dataHora);
                $query->bindValue("responsavel", $responsavel);
    
                $query->execute();
                return true;
            }
        }

        catch (PDOException $ex) {
            echo "Ocorreu um erro ao tentar realizar a requisição com o servidor. A seguinte mensagem foi retornada: ".$ex->getMessage();
            return false;
        }
    }

    #endregion Public Methods


    #region Private Methods

    #endregion Private Methods
}

?>