<?php

namespace QI\trabWeb2\Controller;

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
    case "delete":
        delete();
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
    $solitador = new User($_POST["solicitador"]);
    $colab = new User($_POST["colab"]);
    

    $solicitacao = new Solicitacao(
        $solitador,
        $colab,
        $_POST["description"],
        $_POST["classification"],
        $_POST["notes"]
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

        $log = $e->getFile() . " - " . $e->getLine() . " - " . $e->getMessage();
        Logger::writeLog($log);
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

function delete(){
    $id = $_GET["code"];
    if(empty($id)){
        $_SESSION["msg_error"] = "O código do chamado é inválido!!!";
        header("location:../View/message.php");
        exit;
    }
    try{
        $solicitacao_repository = new SolicitacaoRepository();
        $result = $solicitacao_repository->delete($id);
        if($result){
            $_SESSION["msg_success"] = "Solicitação removido com sucesso!!!";
        }else{
            $_SESSION["msg_warning"] = "Lamento, não foi possível remover o solicitação";
        }
    }catch(Exception $e){
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado em nossa base de dados!!!";
        $log = $e->getFile() . " - " . $e->getLine() . " - " . $e->getMessage();
        Logger::writeLog($log);
    }finally{
        header("location:../View/message.php");
    }
}