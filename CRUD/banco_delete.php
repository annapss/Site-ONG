<?php
    $email = $_REQUEST["email"];

    //se tiver email puxado da request:
    if(!empty($email))
    {
        /* guarda a instrucao em sql de deletar um elemento da tabela voluntario*/
        $sql = "delete from grandes_altitudes.Voluntario where Email = '$email'";

        //-------------------------Inicio da Conexão-------------------------//
        //incluir o .php que contecta no bd, checar se ta no diretorio correto!!!!
        include 'C:\xampp\htdocs\Site-ONG(Beta)\conecta_banco.php'; #Mudar ao sair do beta

		if(!mysqli_select_db($link,$banco))
		{
			echo "erro no select_db";
			echo mysqli_error($link);
			mysqli_close($link);
			die();
		}

        //processa a ultima query feita
        $process = mysqli_query($link,$sql);

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
            header("location: banco_lista.php"); #Mudar para o html da pagina
            mysqli_close($link); 
        }
    }
    //caso nenhum email tenha sido puxado na request, redireciona para a pagina principal
    else
        header("location: carousel/index.php");   
?>