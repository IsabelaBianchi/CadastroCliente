<?php
session_start();
include '../Model/ClienteModel.php';
include '../Include/ClienteValidate.php';
include '../DAO/ClienteDAO.php';

if( 
    (!empty($_POST['txtNome'])) &&
    (!empty($_POST['txtSobrenome'])) &&
    (!empty($_POST['txtDataNascimento'])) &&
    (!empty($_POST['txtEmail'])) &&
    (!empty($_POST['txtSexo'])) ) {
    
    $erros = array();
    
       
    if(!CLIENTEValidate::testEmail($_POST['txtEmail'])){
        $erros[] = "Email inválido";
    }
    
    if(count($erros) == 0){
        $cliente = new ClienteModel();
        
        
        $cliente->nome = $_POST['txtNome'];
        $cliente->sobrenome = $_POST['txtSobrenome'];
        $cliente->dataNascimento = $_POST['txtDataNascimento'];
        $cliente->email = $_POST['txtEmail'];
        
        $cliente->sexo = $_POST['txtSexo'];
        $cliente->profissao = $_POST['txtProfissao'];
        
        $clienteDao = new ClienteDAO();
        $clienteDao->insertCliente($cliente);
        
        $_SESSION['nome'] = $cliente->nome;
        $_SESSION['sobrenome'] = $cliente->sobrenome;
        header("location:../View/ClienteViewResult.php");
        
    } else{
        $err = serialize($erros);
        
        $_SESSION['erros'] = $err;
        header("location:../View/ClienteViewError.php");
    }
    
    
} else{
    echo "Informe todos os campos!";
}

