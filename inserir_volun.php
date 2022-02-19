<?php
//insere novo voluntário na tabela de voluntários da ong

include 'conecta_banco.php';
$sql_insere = <<<FIM

    //insert into voluntario.ong (Nome, Email, ...) values ( ...);

FIM;

$resposta = mysqli_multi_query($link, $sql_insere);

if(!$resposta){
    echo "Falha na conexão:" . mysqli_error($link);
    die();
}

?>
