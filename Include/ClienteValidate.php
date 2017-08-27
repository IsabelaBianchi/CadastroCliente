<?php

/**
 * Description of UserValidate
 * */
class ClienteValidate {
    
    //validação do email
    public static function testEmail($paramEmail){
        $Sintaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
        if(preg_match($Sintaxe, $paramEmail)){
            return true;
        } else{
            return false;
        }
    }
}
