<?php

namespace QI\SistemaDeChamados\Model;
class Solicitacao{
    private $id;
    private $colab;
    private $solicitador
    private $classification;
    private $description;
    private $notes;

    /**
     * Create a new Call object
     * @param colab $user
     * @param solicitador $user
     * @param string $classification 
     * @param string $description
     * @param string $classification
     */
    public function __construct($colab,$solicitador,$classification,$description)
    {
        $this->colab = $colab;
        $this->solicitador = $solicitador;
        $this->description = $description;
        $this->classification = $classification;
        
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