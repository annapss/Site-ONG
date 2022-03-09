<table class="table table-dark table-striped" >
<?php
    // Consulta as tarefas enviadas pelo voluntario (consultar material feito)
    
    include '../banco/bancoONG.php';

    function mate($materia){

        $sql =<<<FIM
        SELECT Conteudo, Formato, Feita_por FROM `material_feito` 
        WHERE Materia = "$materia";
        FIM;
        $link = conexao();
        return executa_select($link, $sql);
           
        }
    
    $materia = $_POST['materia'];
    $conteudo = $_POST['conteudo'];
    
    if ($materia == "Selecione uma Matéria" && empty($conteudo)){  // Não foi informado a matéria e nem o conteúdo
        echo '<script type="text/javascript">
                alert("Deve ser preenchido pelo menos um campo.")
                window.location = "consult_material_index.php"
              </script>';
              //Redirecionamento para a página de consultar os materiais, junto a uma mensagem de que deve ter pelo menos um campo preenchido.
    }
    else{ //filtrando apenas pela matéria
        $cont = 0;
        foreach(mate($materia) as $row){
            if(!isset($row['id_material'])){   //para saber se há algum material feito
                $cont++;
            }
        }
        if ($cont == 0){  //material não feito
            echo '<script type="text/javascript">
                    alert("Não há materiais nessa categoria.")
                    window.location = "consult_material_index.php"
                </script>';
        }
        else{    // material feito
            //echo "<h1 style='font-size: 40px;'>Não há material feito em $materia sobre $conteudo</h1>";
            echo "<h1 style='font-size: 40px;'>$materia</h1>";
            echo "<hr>";
            echo "<tr>";
            echo "<th>Conteúdo</th>";
            echo "<th>Formato</th>";
            echo "<th>Feita por</th>";
            echo "</tr>";
            foreach(mate($materia) as $linha){
                echo "<tr>";
                echo "<td>{$linha['Conteudo']}</td>";
                echo "<td>{$linha['Formato']}</td>";
                echo "<td>{$linha['Feita_por']}</td>"; 
            }
        }     
    }   
        
?>  
</table>