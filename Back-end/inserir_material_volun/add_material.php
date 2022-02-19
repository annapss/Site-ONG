<?php

include "conecta_banco.php";

select_database($link, $banco);

$materia = $_POST["materia"];
$conteudo = $_POST["conteudo"];
$formato = $_POST["formato"];
$autor = $_POST["autor"];

include "sql_volun.php";

if(empty($materia) or empty($conteudo) or empty($formato) or empty($autor)){
    echo "Todos os campos devem ser preenchidos";
}else{
    executar_sql($link, $material);
    echo "Seu material foi adicionado";
};








?>