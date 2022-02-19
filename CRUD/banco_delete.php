<?php
    $email = $_REQUEST["email"];

    if(!empty($email))
    {
        $sql = "delete from grandes_altitudes.Voluntario where Email = '$email'";

        include 'C:\xampp\htdocs\Site-ONG(Beta)\conecta_banco.php'; #Mudar ao sair do beta

		if(!mysqli_select_db($link,$banco))
		{
			echo "erro no select_db";
			echo mysqli_error($link);
			mysqli_close($link);
			die();
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
        header("location: carousel/index.php");   
?>