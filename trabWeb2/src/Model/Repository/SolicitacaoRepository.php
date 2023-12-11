<?php

namespace QI\trabWeb2\Model\Repository;

use PDO;
class SolicitacaoRepository{
    private $connection;

    public function __construct(){
        $this->connection = Connection::getConnection();
    }

    public function insert($solicitacao){
        $colabId = $solicitacao->colab_id->id;
        $solicitadorId = $solicitacao->solicitador_id->id;
        $classification = $solicitacao->classification;
        $description = $solicitacao->description;
        $notes = $solicitacao->notes;
        
        $stmt = $this->connection->prepare("INSERT INTO solicitacoes VALUES (null, ?, ?, ?, ?, ?);");
        
        $stmt->bindParam(1, $colabId);
        $stmt->bindParam(2, $solicitadorId);
        $stmt->bindParam(3, $classification);
        $stmt->bindParam(4, $description);
        $stmt->bindParam(5, $notes);
        
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