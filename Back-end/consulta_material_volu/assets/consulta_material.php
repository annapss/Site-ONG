<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<table border="1"  style="width:70%;" class="table table-dark table-striped" >

<?php
    // Consulta as tarefas enviadas pelo voluntario (consultar material feito)
    
    include '../../banco/bancoONG.php';

    function mateCont($materia, $conteudo){

        $sql =<<<FIM
        SELECT Materia, Conteudo, Formato, Feita_por FROM `material_feito` 
        WHERE Materia = "$materia" AND Conteudo = "$conteudo";
        FIM;
        $link = conexao();
        return executa_select($link, $sql);

    };

    function mate($materia){

        $sql =<<<FIM
        SELECT Conteudo, Formato, Feita_por FROM `material_feito` 
        WHERE Materia = "$materia";
        FIM;
        $link = conexao();
        return executa_select($link, $sql);
           
        }

   

    function cont($conteudo){

        $sql =<<<FIM
        SELECT Conteudo, Formato, Feita_por FROM `material_feito` 
        WHERE Conteudo = "$conteudo";
        FIM;
        $link = conexao();
        return executa_select($link, $sql);

    };


    
     $materia = $_POST['materia'];
     $conteudo = $_POST['conteudo'];
    
     if ($materia == "Selecione uma Matéria" && empty($conteudo)){  // Não foi informado a matéria e nem o conteúdo
        echo '<script type="text/javascript">
                alert("Deve ser preenchido pelo menos um campo.")
                window.location = "http://localhost/Site-ONG/Back-End/consulta_material_volu/consult_material_volu.php"
              </script>';
              //Redirecionamento para a página de consultar os materiais, junto a uma mensagem de que deve ter pelo menos um campo preenchido.
     }else{

        if (empty($conteudo)){ //filtrando apenas pela matéria
            $cont = 0;
            foreach(mate($materia) as $row){
                if(!isset($row['id_material'])){   //para saber se há algum material feito
                    $cont++;
                }
             }
                if ($cont > 0){  //material feito
                    echo "<h1 style='font-size: 40px;'>Materiais feitos em $materia</h1>";
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
                echo "</tr>";
                }else{  //material não feito
                    //echo "<h1 style='font-size: 40px;'>Não há meterial feito sobre $materia</h1>";
                    echo '<script type="text/javascript">
                            alert("Não há material feito sobre está matéria.")
                            window.location = "http://localhost/Site-ONG/Back-End/consulta_material_volu/consult_material_volu.php"
                          </script>';
                }
        }
                    
        elseif($materia == "Selecione uma Matéria"){   //filtrando apenas por conteudo
            $cont = 0;
            foreach(cont($conteudo) as $row){
                if(!isset($row['id_material'])){   //para saber se há algum material feito
                    $cont++;
                }
            }
            if($cont > 0){  //material feito
                echo "<h1 style='font-size: 40px;'>Materiais feitos sobre $conteudo</h1>";
                echo "<hr>";
                echo "<tr>";
                echo "<th>Conteúdo</th>";
                echo "<th>Formato</th>";
                echo "<th>Feita por</th>";
                echo "</tr>";

                foreach(cont($conteudo) as $linha){

                    echo "<tr>";
                    echo "<td>{$linha['Conteudo']}</td>";
                    echo "<td>{$linha['Formato']}</td>";
                    echo "<td>{$linha['Feita_por']}</td>"; 
                
                }
                echo "</tr>";
            }else{     // Conteúdo não feito em certa material
                //echo "<h1 style='font-size: 40px;'>Não há meterial feito sobre $conteudo</h1>";
                echo '<script type="text/javascript">
                            alert("Não há meterial feito sobre este Conteúdo.")
                            window.location = "http://localhost/Site-ONG/Back-End/consulta_material_volu/consult_material_volu.php"
                          </script>';
            }
                
        }       
        else{ // filtrando por matéria e conteúdo
            $cont = 0;
            foreach(mateCont($materia, $conteudo) as $row){
                if(!isset($row['id_material'])){   //para saber se há algum material feito
                    $cont++;
                }
            }
            if($cont > 0){  //material feito
                echo "<h1 style='font-size: 40px;'>Materiais feitos em $materia sobre $conteudo</h1>";
                echo "<hr>";
                echo "<tr>";
                echo "<th>Matéria</th>";
                echo "<th>Conteúdo</th>";
                echo "<th>Formato</th>";
                echo "<th>Feita por</th>";
                echo "</tr>";

                foreach(mateCont($materia, $conteudo) as $linha){

                    echo "<tr>";
                    echo "<td>{$linha['Materia']}</td>";
                    echo "<td>{$linha['Conteudo']}</td>";
                    echo "<td>{$linha['Formato']}</td>";
                    echo "<td>{$linha['Feita_por']}</td>"; 
            
            }
            echo "</tr>";
            }else{    // material não feito
                //echo "<h1 style='font-size: 40px;'>Não há material feito em $materia sobre $conteudo</h1>";
                echo '<script type="text/javascript">
                            alert("Não há meterial feito sobre este Conteúdo.")
                            window.location = "http://localhost/Site-ONG/Back-End/consulta_material_volu/consult_material_volu.php"
                          </script>';
            }
            
        }
     }   
        
?>  
</table>
  