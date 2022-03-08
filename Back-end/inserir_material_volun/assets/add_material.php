<?php
    // adiciciona no banco tarefas enviadas pelo voluntarios
    include "../../banco/conecta_banco.php";

    $materia = $_POST["materia"];
    $conteudo = $_POST["conteudo"];
    $formato = $_POST["formato"];
    $autor = $_POST["autor"];

    $sql =<<<FIM
        INSERT INTO grandes_altitudes.material_feito (Materia, Conteudo, Formato, Feita_por) VALUES ("$materia", "$conteudo", "$formato", "$autor");
        FIM;
    if(empty($materia) or empty($conteudo) or empty($formato) or empty($autor)){
        echo '<script type="text/javascript">
                alert("Todos os campos devem ser Preenchidos!")
                window.location = "http://localhost/Site-ONG/Back-End/inserir_material_volun/insert_material_index.php"
            </script>';
            //Redirecionamento para a página de adiconar um material, junto a uma mensagem de que deve ter todos os campos preenchidos.
            //ADENDO: http://localhost vai ser substituido pelo link do dominio.
    }else{ 
        
        $link = conexao();
        executa_sql($link, $sql);
        echo '<script type="text/javascript">
                alert("Material Adicionado com Sucesso!")
                window.location = "http://localhost/Site-ONG/Front-End/pag_perfil_vol_coord/conta.php"
            </script>';
            //Redirecionamento para a página de login, após o envio do material, em JavaScript. metódo de saída de buffer.
            //ALERTA QUE FOI ADICIONADO APÓS O MATERIAL SER ENVIADO
            //ADENDO: http://localhost vai ser substituido pelo link do dominio.


        //$redirect_page = 'http://localhost/Site-ONG/Front-End/pag_perfil_vol_coord/conta.php';  REDIRECIONAMENTO UTILIZANDO O PHP! REMOVENDO O ECHO
        //header('Location:'  .$redirect_page);
        //die();
        //function
    };

?>
