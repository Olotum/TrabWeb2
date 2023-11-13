<?php
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
        header("../View/message.php");
        exit;
    }
    $error = array();
}
