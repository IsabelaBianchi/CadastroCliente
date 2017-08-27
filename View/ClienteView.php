<!DCOTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Cadastro de Cliente</title>
    </head>
    
    <body>
        <form action="../Controler/ClienteControler.php" method="post" name="cadUser">
            <!--<input type="text" name="txtUser" id="txtUser" placeholder="Usuário" />-->
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome" />
            <input type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome" />
            <input type="text" name="txtDataNascimento" id="txtDataNascimento" placeholder="Data Nasc" />
            
            <input type="text" name="txtEmail" id="txtEmail" placeholder="email@email.com" />
            <!--<input type="text" name="txtIdade" id="txtIdade" placeholder="Idade" />-->
            <input type="text" name="txtSexo" id="txtSexo" placeholder="Sexo" />
            <input type="text" name="txtProfissao" id="txtProfissao" placeholder="Profissao" />
            
            
            
            <!--<input type="password" name="pwdSenha" id="pwdSenha" placeholder="Senha" />-->
            <input type="submit" name="btCadastrar" id="btCadastrar" placeholder="Cadastrar" />
            <input type="reset" name="btLimpar" id="btLimpar" placeholder="Limpar" />            
        </form>
    </body>
    
</html>
