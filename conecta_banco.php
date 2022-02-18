<?php
function banco_conecta() 
{
   global $dados_banco

    $host = $dados_banco['Host'];
    $usuario = $dados_banco['Usuario'];
    $senha = $dados_banco['Senha'];
    $banco = $dados_banco['Banco'];

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

    return $link;
}

?>