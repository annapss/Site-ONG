<?php

include "conecta_banco.php"; //arquivo com funcoes para conexao com o banco
$link = conexao();

$sql = <<<FIM
CREATE DATABASE if NOT EXISTS grandes_altitudes;
CREATE TABLE grandes_altitudes.Login(
           Email  varchar(40),
           Senha  varchar(500),

           PRIMARY KEY(Email)
   );
   CREATE TABLE grandes_altitudes.Coordenador(
           Nome  varchar(50),
           Telefone  varchar(12),
           Email varchar(40),
       
           PRIMARY KEY(Email),
           FOREIGN KEY(Email) REFERENCES Login(Email)
   );
   CREATE TABLE grandes_altitudes.Voluntario(
           Nome varchar(50),
           Telefone  varchar(12),
           Email   varchar(40),
       
           PRIMARY KEY(Email), 
           FOREIGN KEY(Email) REFERENCES Login(Email)
   );
   CREATE TABLE grandes_altitudes.Material_Feito(
           id_material int AUTO_INCREMENT,
           Materia  varchar(50),
           Conteudo  varchar(50),
           Formato  varchar(10),
           Feita_por  varchar(50),
       
           PRIMARY KEY(Id_material)
   );
FIM;

executa_sql($link, $sql);

?>
