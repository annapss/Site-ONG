<html>
    
    <?php include 'header.php';?>

    <body style="background-color:blanchedalmond;">
        <div class="title">    
            <h1>Adicionar Tarefa</h1>
        </div>  
        <div class="body">  
            <form method="post" action="add_material.php">
                <!--<input type="hidden" name="id_contato" value="<?=$id_contato?>">-->
                <p>
                <label for="materia">&nbsp&nbsp&nbspMatéria:</label>
                <input type="text" id="materia" size="40" name="materia">
                </p>

                <p>
                <label for="conteudo">Conteúdo:</label>
                <input type="text" size="40" id="conteudo" name="conteudo">
                </p>

                <p style="text-align: left;">    
                    <label for="formato">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFormato:</label>
                    <select name="formato"  id="formato">
                        <option>Selecione uma opção</option>
                        <option value="Vide-aula">Vídeo Aula</option>
                        <option value="resumo">Resumo</option>
                        <option value="reels-tiktok">Reels ou TikTok</option>
                    </select>
                </p>

                <p>    
                    <label for="autor">&nbsp&nbspFeita por:</label>
                    <input type="text" id="autor" size="40" name="autor">
                </p>
                
                <p>
                    <input type="submit" value="Adicionar">
                </p>
            </form>    
        </div>
        <?php include 'footer.php';?>
    </body>    
</html>