<?php
    // Consulta as tarefas enviadas pelo voluntario
    include "conecta_banco.php";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Materia</th>";
    echo "<th>Resumo</th>";
    echo "<th>Vídeo</th>";    
    echo "<tr>";    
    //Conectando ao Banco de Dados
    $strcon = mysqli_connect('')
    $sql = "SELECT * FROM "
    $resultado =mysqli_query($strcon,$sql) or die("Erro ao tentar consultar")
    
    while ($registro = mysqli_fetch_array($resultado))
        $materia = $registro['materia'];
        $resumo = $registro['resumo'];
        $video = $registro['video'];
        echo "<tr>";
        echo "<td>Materia</td>";
        echo "<td>Resumo</td>";
        echo "<td>Vídeo</td>";    
        echo "<tr>";
    mysqli_close($strcon);
    echo "</table>";    
?>