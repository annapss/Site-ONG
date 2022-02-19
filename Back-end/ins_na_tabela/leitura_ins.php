<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<table border="1"  style="width:70%;" class="table table-dark table-striped" >
    <?php

    $linha = 1;
    //Nome; Telefone; Participacao; Dia_hora; Grau; Dia_hora_opcao; Materias; Outros
    $arquivo = fopen("ins.csv", "r");

    if ($arquivo != FALSE){
        echo "<h1 style='font-size: 40px;'>Inscrições enviadas</h1>";
        $dados = fgetcsv($arquivo, 1000, ";");
        echo "<tr>";
        echo "<th>Nome:</th>";
        echo "<th>Telefone:</th>";
        echo "<th>Participação:</th>";
        echo "<th>Dia e horário:</th>";
        echo "<th>Grau de Escolaridade:</th>";
        echo "<th>Dia e horário opcional:</th>";
        echo "<th>Matérias:</th>";
        echo "<th>Outros:</th>";
        echo "</tr>";
    
        while ($dados != FALSE){
            echo "<tr>";
            foreach($dados as $valor){
                if ($linha > 1){
                    echo "<td>$valor</td>"; 
                }
                
            }
            echo "</tr>";
            $dados = fgetcsv($arquivo, 1000, ";");
            $linha++;
        }
        fclose($arquivo);


    }

  

    ?> 
</table>
