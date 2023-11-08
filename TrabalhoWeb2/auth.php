<?php
$users = array(
    array(
        "name" => "Pedro",
        "cpf"=> "999",
        "password" => password_hash("123456", PASSWORD_DEFAULT)
    ),
    array(
        "name"=> "Maria",
        "cpf"=> "999",
        "password"=> password_hash("123456", PASSWORD_DEFAULT)
    )
);

session_start();
if(empty($_POST)){
    $_SESSION["msg_error"] = "
    Ops, houve um erro inesperado!!!";
    header("location:message.php");
    exit;
}

$cpf = $_POST["user_cpf"];
$pass = $_POST["user_password"];

foreach($users as $user){
    if ($cpf == $user["cpf"] && password_verify($pass, $user["password"])) {
        $_SESSION["name"] = $user["name"];
        header("location:dashboard.php");
        exit;
    }
}

$_SESSION["msg_warning"] = "Lamento, usuário não localizado!!!";
header("location:message.php");