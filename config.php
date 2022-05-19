<?php

// Se as CONSTANTES não tiverem sido definidas ainda,
// defina elas com os valores informados
if (!defined('MYSQL_SERVER')) define('MYSQL_SERVER', 'localhost');
if (!defined('MYSQL_DATABASE')) define('MYSQL_DATABASE', 'wl_finan');
if (!defined('MYSQL_USER'))define('MYSQL_USER', 'root');
if (!defined('MYSQL_PASS'))define('MYSQL_PASS', 'mDB_C0nn|');
if (!defined('MYSQL_CHARSET'))define('MYSQL_CHARSET', 'utf8');

global $pdo;


// Tentamos fazer a conexão com o banco de dados por meio da PDO.Caso dê algum erro, joga uma exceção
try {
    $pdo = new PDO("mysql:dbname=".MYSQL_DATABASE."; host=".MYSQL_SERVER, MYSQL_USER, MYSQL_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex) {
    echo "Ocorreu um erro ao tentar conectar com o servidor. A seguinte mensagem foi retornada: ".$ex->getMessage();
}

?>