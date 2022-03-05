<?php
    // adiciciona no banco tarefas enviadas pelo voluntarios
    include "conecta_banco.php";

    $materia = $_POST["materia"];
    $conteudo = $_POST["conteudo"];
    $formato = $_POST["formato"];
    $autor = $_POST["autor"];

    $sql =<<<FIM
        INSERT INTO grandes_altitudes.material_feito (Materia, Conteudo, Formato, Feita_por) VALUES ("$materia", "$conteudo", "$formato", "$autor");
        FIM;
    if(empty($materia) or empty($conteudo) or empty($formato) or empty($autor)){
        echo "Todos os campos devem ser preenchidos";
    }else{ 
        
        $link = conexao();
        executa_sql($link, $sql);
        echo "Seu material foi adicionado";
      
    };




?>
