<?php

namespace QI\SistemaDeChamados\Controller;

use Exception;
use QI\trabWeb2\Model\{Solicitacao, User};
use QI\trabWeb2\Model\Repository\SolicitacaoRepository;

require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";

session_start();
switch ($_GET["operation"]) {
    case "insert":
        insert();
        break;
    case "findAll":
        findAll();
        break;
    default:
        $_SESSION["msg_warning"] = "Operação inválida!!!";
        header("location:../View/message.php");
        exit;
}

function insert()
{
    if (empty($_POST)) {
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado!!!";
        header("../View/message.php");
        exit;
    }
    $solitador = new User($_POST["user_cpf"], ["user_clasificacao"]);
    $solitador->name = $_POST["user_name"];
    $solitador->id = 1;

    $colab = new User($_POST["user_cpf"], ["user_clasificacao"]);
    $colab->name = $_POST["user_name"];
    $colab->id = 1;

    $solicitacao = new Solicitacao(
        $solitador,
        $colab,
        $_POST["description"],
        $_POST["classification"]
    );

    // TODO Validar os dados do POST
    $errors = array();
    if (!empty($errors)) {
        // TODO MOSTRAR OS ERROS NA TELA DE MENSAGEM
    }
    try {
        $solicitacao_repository = new SolicitacaoRepository();
        $result = $solicitacao_repository->insert($solicitacao);
        if ($result) {
            $_SESSION["msg_success"] = "Chamado registrado com sucesso!!!";
        } else {
            $_SESSION["msg_warning"] = "Lamento, não foi possível registrar o chamado!!!";
        }
    } catch (Exception $e) {
        $_SESSION["msg_error"] = "Ops, houve um erro inesperado!!!";

        $log = $
        // TODO Criar um log de sistema
    } finally {
        header("location:../View/message.php");
        exit;
    }
}

function findAll()
{
    $solicitacao_repository = new SolicitacaoRepository();
    $_SESSION["list-of-solicitacoes"] = $solicitacao_repository->findAll();
    header("location:../View/list-of-solicitacoes.php");
}
