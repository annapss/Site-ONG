<?php

$host = "localhost";
$usuario = "root";
$senha = "";

$link = mysqli_connect($host, $usuario, $senha);
if(!$link){
    echo mysqli_connect_error();
    die();
}


?>