<table class="table table-dark table-striped center">
    <?php

    $linha = 1;
    //Nome; Telefone; Participacao; Dia_hora; Grau; Dia_hora_opcao; Materias; Outros
    $arquivo = fopen("assets/insc.csv", "r");

    if ($arquivo != FALSE){
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
