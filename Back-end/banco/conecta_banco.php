<?php
    // arquivo para conexão com o banco de dados

    function conectaServer(){ //funcao para criacao do banco da ONG em bancoONG.php
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "grandes_altitudes";
        
        $link = mysqli_connect($host,$usuario,$senha);
        if(!$link)
        {
            echo "Erro de conexao: " . mysqli_connect_error();
            die();
        }
        return $link;
    }

    function conexao(){ //chamando essa função abrimos a conexao com o server e escolhemos o banco e dados

        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "grandes_altitudes";
        
        $link = mysqli_connect($host,$usuario,$senha);
        if(!$link)
        {
            echo "Erro de conexao: " . mysqli_connect_error();
            die();
        }
      
        if(!mysqli_select_db($link, $banco))
        {
            echo "Erro na selecao do banco: " . mysqli_error($link);
            mysqli_close($link);
            die();
        }

        register_shutdown_function(function() use ($link) {
            mysqli_close($link);
        });

        return $link; //com o link podemos chamar a a funcao executa_sql() no codigo
    }
   
    function executa_select($link, $sql){ // executamos o sql

        $resposta = mysqli_query($link, $sql);
        if($resposta) // se o sql der certo
        {
            $linha = mysqli_fetch_assoc($resposta); // armazena o resultado em forma de array (primeira linha do resultado) 
            while($linha)
            {
                yield $linha;
                $linha = mysqli_fetch_assoc($resposta);
            }
        }
        else  // sql deu erro
        {
            echo mysqli_error($link);
        }

    }
   
     function executa_sql($link, $sql){

        $resposta = mysqli_multi_query($link, $sql);

        if(!$resposta)
        {
            echo mysqli_error($link);
        }
     }
            
?>