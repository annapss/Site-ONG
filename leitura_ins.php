

<style>
    th{
        background-color: #f4fa8c;
        font-size: 25px;
    }
    td{
        background-color: #e0d8d7;
        font-size: 20px;
    }
    h1{
        font-size: 40px;
    }
</style>

<table border="1" width="90%" >
    <?php

    $linha = 1;
    //Nome; Telefone; Participacao; Dia_hora; Grau; Dia_hora_opcao; Materias; Outros
    $arquivo = fopen("ins.csv", "r");

    if ($arquivo != FALSE){
        echo "<h1>Inscrições enviadas</h1>";
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
