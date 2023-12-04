<?php

namespace QI\trabWeb2\Model;
class Solicitacao{
    private $id;
    private $colab;
    private $solicitador;
    private $classification;
    private $description;
    private $notes;

    /**
     * Create a new Call object
     * @param User $colab
     * @param User $solicitador
     * @param string $classification 
     * @param string $description
     * @param string $classification
     */
    public function __construct($solicitador,$colab,$classification,$description,$notes)
    {
        $this->colab = $colab;
        $this->solicitador = $solicitador;
        $this->description = $description;
        $this->classification = $classification; 
        $this->$notes = $notes;
        
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