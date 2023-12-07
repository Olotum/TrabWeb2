<?php

namespace QI\trabWeb2\Model\Repository;

use PDO;
class SolicitacaoRepository{
    private $connection;

    public function __construct(){
        $this->connection = Connection::getConnection();
    }

    public function insert($solicitacao){
        $stmt = $this->connection->prepare("insert into solicitacoes values(null, ?, ?, ?, ?, ?);");
        $stmt->bindParam(1, $solicitacao->colab_id->id);
        $stmt->bindParam(2, $solicitacao->solicitador_id->id);
        $stmt->bindParam(3, $solicitacao->classification);
        $stmt->bindParam(4, $solicitacao->description);
        $stmt->bindParam(5, $solicitacao->notes);
        return $stmt->execute();
    }

    public function findAll(){
        $stmt = $this->connection->query("select s.*,u.name as solicitador,us.name as colab from solicitacoes s inner join users u on s.solicitador_id = u.id inner join users us on s.colab_id = us.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id){
        $stmt = $this->connection->query("delete from solicitacoes where id=$id");
        return $stmt->execute();
    }
}