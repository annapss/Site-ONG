<html>
    <!--Voluntário consulta material com CSS-->
    <head>
        <meta charset="UTF-8"/>
        <link href="../../Front-End/assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
        <style> 
            label{
                font-size: 16px;
            }
            .body{
                text-align: center;
                margin: 0% 30% 0% 30%;
                background-color: #424757;
                padding: 20px;
                color: #efefef;
                font-family: "Open Sans", Arial, sans-serif;
            }
            .contornar{
                color:#FFCCAC; 
                text-shadow:#000 2px -2px, #000 -2px 2px, #000 2px 2px, #000 -2px -2px;
            }
            h1,h2,h3,h4,h5,h6{
                color: #efefef;
                font-weight: bold;
            }
        </style>
        <?php include 'C:\xampp\htdocs\Site_ONG\Front-End\assets\xmenu.php'; ?>
    </head>
    <body style="background-color:blanchedalmond;">
        <div class="body contornar" style="background-color: #73cee3;">
            <br><br><br>
            <h1>Consultar Materia</h1>
        </div>
        <div class="body" style="height: 100%;">  
            <form method="post" action="consulta_material.php">
                <!--<input type="hidden" name="id_contato" value="<?=$id_contato?>">-->
                <p>
                    <label for="materia">Matéria:</label><br>
                    <input type="text" id="materia_consult" size="30" name="materia_consult">
                </p>

                <p>
                    <label for="conteudo_consult">Conteúdo:</label><br>
                    <input type="text" size="30" id="conteudo_consult" name="conteudo_consult">
                </p>

                <p">    
                    <label for="formato_consult">Formato:</label><br>
                    <select name="formato_consult"  id="formato_consult">
                        <option>Selecione uma opção</option>
                        <option value="Vide-aula">Vídeo Aula</option>
                        <option value="resumo">Resumo</option>
                        <option value="reels-tiktok">Reels ou TikTok</option>
                    </select>
                </p>

                <p>    
                    <label for="autor_consult">Feita(o) por:</label><br>
                    <input type="text" id="autor_consult" size="30" name="autor_consult">
                </p>
                
                <p>
                    <input type="submit" name="consult_materias" value="Consultar">
                </p>
            </form>    
        </div>
    </body>    
</html>
