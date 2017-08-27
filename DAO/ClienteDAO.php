<?php

/**
 * Description of UserDAO
 *
 */

include '../Persistence/ConnectionDB.php';

class ClienteDAO {
    //put your code here
    private $connection = null;
    
    public function __construct() {
        $this->connection = ConnectionDB::getInstance();
    }
    
    public function insertCliente($cliente){
        try{
            $status = $this->connection->prepare("Insert Into cliente(id, nome, sobrenome, "
                                                    . "dataNascimento, email, sexo ,profissao) "
                                                    . "values(null, ?, ?, ?, ?, ?,?)");
            
            $status->bindValue(1, $user->nome);
            $status->bindValue(2, $user->sobrenome);
            $status->bindValue(3, $user->dataNascimento);
            $status->bindValue(4, $user->email);
            $status->bindValue(5, $user->sexo);
            $status->bindValue(6, $user->profissao);
            
            $status->execute();
            
            //Encerra a conexão com o banco
            $this->connection = null;
            
        } catch (Exception $e) {
            echo "Ocorreram erros ao inserir novo cliente!";

        }
    }
    
}
