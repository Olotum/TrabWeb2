<?php

namespace QI\trabWeb2\Controller;

session_start();
switch ($_GET["operation"]) {
    case "insert":
        insert();
        break;
}

function insert()
{
    if (empty($_POST)) {
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado!!!";
        $log = $e->getFile() . " - " . $e->getLine() . " - " . $e->getMessage();
        Logger::writeLog($log);
    } finally {
        header("../View/message.php");
        exit;
    }
    // TODO Implementar o objeto Call
    // TODO Validar os dados do POST
    $error = array();
}

