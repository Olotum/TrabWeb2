<?php

namespace QI\SistemaDeChamados\Model;

class User{
    private $id;
    private $name;
    private $cpf;
    private $cargo;
    private $setor;
    private $classificacao;
    private $password;

    /**
    * @param string $cpf
    */
    public function __construct($cpf, $classificacao){
        $this->cpf = $cpf;
        $this->classificacao = $classificacao;
    }

    public function __get($attribute){
        return $this->$attribute;
    }

    public function __set($attribute,$value){
        $this->$attribute = $value;
    }
}