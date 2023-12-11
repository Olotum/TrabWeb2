<?php

namespace QI\trabWeb2\Model\Repository;

use \PDO;

class Connection
{
    private static $connection;

    // Declare as constantes fora do método
    const DSN = 'mysql:host=localhost;dbname=team_mk;charset=utf8';
    const USER = 'root';
    const PASSWORD = '***';

    private function __construct()
    {
    }

    public static function getConnection()
    {
        try {
            if (self::$connection == null) {
                // Use as constantes aqui
                self::$connection = new PDO(self::DSN, self::USER, self::PASSWORD);
                // Configuração para lançar exceções em caso de erro
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$connection;
        } catch (PDOException $e) {
            // Tratar a exceção (por exemplo, logar ou lançar novamente)
            echo 'Erro de conexão: ' . $e->getMessage();
            // Você pode lançar novamente a exceção ou retornar null, dependendo do seu caso
            // throw $e;
            return null;
        }
    }
}
