<?php
session_start();

switch ($_GET["operation"]) {
    case "login":
        login();
        break;
    case "logout":
        logout();
        break;
    default:
        $_SESSION["msg_warning"] = "Operação inválida!!!";
        header("location:../View/message.php");
        exit;
}

function login()
{
    $users = array(
        array(
            "name" => "Pedro",
            "cargo" => "Gerente",
            "cpf" => "999",
            "password" => password_hash("123456", PASSWORD_DEFAULT)
        ),
        array(
            "name" => "Maria",
            "cargo" => "Assistente de RH",
            "cpf" => "111",
            "password" => password_hash("123456", PASSWORD_DEFAULT)
        )
    );

    if (empty($_POST)) {
        $_SESSION["msg_error"] = "Ops, houve um erro inesperado!!!";
        header("location:../View/message.php");
        exit;
    }

    $cpf = $_POST["user_cpf"];
    $pass = $_POST["user_password"];

    foreach ($users as $user) {
        if ($cpf == $user["cpf"] && password_verify($pass, $user["password"])) {
            $_SESSION["user_data"] = $user;
            header("location:../View/dashboard.php");
            exit;
        }
    }

    $_SESSION["msg_warning"] = "Lamento, usuário não localizado!!!";
    header("location:../View/message.php");
}

function logout()
{
    unset($_SESSION["user_data"]);
    header("location:../index.html");
    exit;
}
