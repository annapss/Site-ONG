<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
        <?php include 'C:\xampp\htdocs\Site-ONG\Front-End\assets\xmenu.php'; ?> 
        <link rel="stylesheet" href="../assets/css/site.css">
    </head>
    <body>
        <div class="body contornar" style="background-color: #73cee3;">
            <br><br><br>
            <h1>Inserir Material</h1>
        </div>
        <div class="body">  
            <form method="post" action="assets/add_material.php">
                <!--<input type="hidden" name="id_contato" value="<?=$id_contato?>">-->
                <p>
                    <label for="materia">Matéria:</label>
                    <div class="text-box">
                        <input type="text" id="materia" size="40" name="materia" class="form-control form-control-sm">
                    </div>    
                </p>

                <p>
                    <label for="conteudo">Conteúdo:</label>
                    <div class="text-box">
                        <input type="text" size="40" id="conteudo" name="conteudo" class="form-control form-control-sm">
                    </div>
                </p>

                <p>    
                    <label for="formato">Formato:</label>
                    <div class="text-box">
                        <select name="formato"  id="formato" class="form-select form-select-sm">
                            <option>Selecione uma opção</option>
                            <option value="Vide-aula">Vídeo Aula</option>
                            <option value="Resumo">Resumo</option>
                            <option value="Reels-tiktok">Reels ou TikTok</option>
                        </select>
                    </div>    
                </p>

                <p>    
                    <label for="autor">Feita por:</label>
                    <div class="text-box">
                        <input type="text" id="autor" size="40" name="autor" class="form-control form-control-sm">
                    </div>
                </p>
                
                <p>
                    <a class="btn btn-primary" href="../../Front-End/pag_perfil_vol_coord/conta.php" role="button">Voltar ao perfil</a>
                </p>

                <p>
                    <input type="submit" value="Adicionar" class="btn btn-primary">
                </p>
            </form>
        </div>
        <div class="body" style="height: 80%;"></div>
    </body>
</html>