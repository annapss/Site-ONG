<?php
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST['email'];
    $senha = sha1($_REQUEST["senha"]);
    $telefone = $_REQUEST["telefone"];

    if(!empty($email))
    {   
        include 'C:\xampp\htdocs\Site-ONG(Beta)\conecta_banco.php'; #Mudar ao sair do beta

        if($senha == "da39a3ee5e6b4b0d3255bfef95601890afd80709")
            $sql = "UPDATE grandes_altitudes.Coordenador, grandes_altitudes.Voluntario, grandes_altitudes.Login SET Nome = '$nome', Email = '$email', Telefone = '$telefone' WHERE Email = '$email';";
        else
        {
            $sql = "UPDATE grandes_altitudes.Login SET Email = '$email', Senha = '$senha' WHERE Email = '$email'";
            $process = mysqli_query($link,$sql);
            $sql = "UPDATE grandes_altitudes.Coordenador SET Nome = 'Vitin', Email = '$email', Telefone = '12948'";
            $process = mysqli_query($link,$sql);
            $sql = "UPDATE grandes_altitudes.Voluntario SET Nome = 'Vitin', Email = '$email', Telefone = '12948' WHERE Email = '$email'";
        }
        $process = mysqli_query($link,$sql);
        if(!$process)
        {
            echo "erro na consulta $sql";
            echo mysqli_error($link);
            mysqli_close($link);
            die();
        }
        else{
            header("location: banco_lista.php"); #Mudar para o html da pagina
            mysqli_close($link); 
        }
    }    
    else
        header("location: carousel/index.php"); #Acabar com os invasores
?>