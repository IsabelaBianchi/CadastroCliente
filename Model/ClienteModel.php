<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteModel
 
 */
class ClienteModel {
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $email;
    private $sexo;
    private $profissao;
    
//    private $nome;
//    private $data;
//    private $cpf;
//    private $sexo;
//    private $profissao;
//    private $nome;
//    private $data;
//    private $cpf;
//    private $sexo;
//    private $profissao;
//    private $profissao;
    
    public function __construct() {
        
    }
    
    public function __set($propriedade, $value) {
        $this->$propriedade = $value;
    }
    
    public function __get($propriedade) {
        return $this->$propriedade;
    }
}
