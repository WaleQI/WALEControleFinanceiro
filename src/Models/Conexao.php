<?php
namespace Models\Utils;
use PDO;
use PDOException;

class Conexao {
    public $serverName = "localhost";
    public $userName = "root";
    public $password = "mDB_C0nn|";
    public $dbName = "wl_finan";


    // METHODS
    public function defineConnection($serverName, $userName, $password, $dbName) {
        try {
            $pdo = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }
        catch(PDOException $ex) {
            echo "Error in connection. Message error: " . $ex->getMessage();
            return false;
        }
    }
}
?>
