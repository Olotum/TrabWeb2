<?php

namespace QI\trabWeb2\Model;
class Solicitacao{
    private $id;
    private $colab_id;
    private $solicitador_id;
    private $classification;
    private $description;
    private $notes;

    /**
     * Create a new Call object
     * @param User $colab_id
     * @param User $solicitador_id
     * @param string $classification 
     * @param string $description
     */
    public function __construct($solicitador_id, $colab_id, $classification, $description, $notes = null)
{
    $this->colab_id = $colab_id;
    $this->solicitador_id = $solicitador_id;
    $this->classification = $classification;
    $this->description = $description;
    $this->notes = $notes;
}



    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }
}