<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "grandes_altitudes";

$link = mysqli_connect($host, $usuario, $senha);
if(!$link){
    echo mysqli_connect_error();
    die();
};

function select_database($link,$banco){
    if(!mysqli_select_db($link, $banco)){
        echo "erro ao selcionar banco de dados";
        echo mysqli_error($link);
        mysqli_close($link);
        die();

    }
};

function executar_sql($link, $sql){
    $resposta = mysqli_multi_query($link, $sql);

    if(!$resposta)
    {
        echo mysqli_error($link);
    }
};
    
 

?>