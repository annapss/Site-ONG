<?php
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST['email'];
    $password = sha1($_REQUEST['senha']); #Manter o nome como password para evitar conflito com o script conecta_banco.php que ja possui uma variavel chamada senha
    $telefone = $_REQUEST['telefone'];

    //se tiver email puxado da request:
    if(!empty($email))
    {      
        //-------------------------Inicio da Conexão-------------------------//
        //incluir o .php que contecta no bd, checar se ta no diretorio correto!!!!
        include '../../banco/bancoONG.php'; #Mudar ao sair do beta
        $link = conexao();
        //caso a senha seja vazia
        if($password == "da39a3ee5e6b4b0d3255bfef95601890afd80709")
        {
            $sql = "UPDATE grandes_altitudes.Login SET Email = '$email' WHERE Email = '$email'";
            $process = mysqli_query($link,$sql);

            $sql = "UPDATE grandes_altitudes.Coordenador SET Nome = '$nome', Email = '$email', Telefone = '$telefone' WHERE Email = '$email'";
            $process = mysqli_query($link,$sql);

            //atualiza as tabelas coordenador, voluntario e login de acordo com o email
            $sql = "UPDATE grandes_altitudes.Voluntario SET Nome = '$nome', Email = '$email', Telefone = '$telefone' WHERE Email = '$email'";
            //processa a ultima query feita
            $process = mysqli_query($link,$sql);
        }
        else
        {
            //atualiza a tabela login e processa a query na conexao
            $sql = "UPDATE grandes_altitudes.Login SET Email = '$email', Senha = '$password' WHERE Email = '$email'";
            $process = mysqli_query($link,$sql);

            //atualiza a tabela coordenador e processa a query na conexao
            $sql = "UPDATE grandes_altitudes.Coordenador SET Nome = '$nome', Email = '$email', Telefone = '$telefone' WHERE Email = '$email'";
            $process = mysqli_query($link,$sql);

            //atualiza a tabela voluntario
            $sql = "UPDATE grandes_altitudes.Voluntario SET Nome = '$nome', Email = '$email', Telefone = '$telefone' WHERE Email = '$email'";
            //processa a ultima query feita
            $process = mysqli_query($link,$sql);
        }

        //caso a query não tenha sido processada corretamente
        if(!$process)
        {
            echo "erro na consulta $sql";
            echo mysqli_error($link);
            mysqli_close($link);
            die();
        }
        else{
            //tendo sucesso, direciona para a pagina que contem os dados em display
            header("location: ../crud_index.php"); #Mudar para o html da pagina
            mysqli_close($link); 
        }
    }
    //caso nenhum email tenha sido puxado na request, redireciona para a pagina principal
    else
        header("location: carousel/index.php");
?>