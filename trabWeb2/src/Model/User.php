<?php

namespace QI\trabWeb2\Model;

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
    public function __construct($id){
        $this->id = $id;
    }

    public function __get($attribute){
        return $this->$attribute;
    }

    public function __set($attribute,$value){
        $this->$attribute = $value;
    }
}