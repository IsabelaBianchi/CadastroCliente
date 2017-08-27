<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <title>Cadastro de Cliente Efetuado!</title>
    </head>
    <body>
        <h1>Resultado!</h1><p>
        <?php
            if(isset($_SESSION['nome']) && isset($_SESSION['sobrenome'])){
                echo '<br>Cliente: ' . $_SESSION['nome']. $_SESSION['sobrenome'];
                
                unset($_SESSION['nome']);
                unset($_SESSION['sobrenome']);
            }
        ?>
    </body>        
</html>