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
        <?php include 'C:\xampp\htdocs\Site-ong/Front-End/assets/xmenu.php';?> 
    </head>
    <body style="background-color:blanchedalmond;">
        <div class="body contornar" style="background-color: #73cee3;">
            <br><br><br>
            <h1>Consultar Materia</h1>
        </div>
        <div class="body">  
            <form method="post" action="consulta_material.php">
                
                <p>
                    <label for="materia">Matéria:</label>
                    <select class="form-select form-select mb-3" aria-label=".form-select-sm example" id="materia" name="materia">
                        <option>Selecione uma Matéria</option>
                        <option>Artes</option>
                        <option>Biologia</option>
                        <option>Espanhol</option>
                        <option>Filosofia</option>
                        <option>Física</option>
                        <option>Geografia</option>
                        <option>História</option>
                        <option>Inglês</option>
                        <option>Literatura</option>
                        <option>Matemática</option>
                        <option>Português</option>
                        <option>Química</option>
                        <option>Redação</option>
                        <option>Sociologia</option>
                    </select>
                </p>
               

                <p>
                    <label for="conteudo">Conteúdo:</label>
                    <input type="text" size="40" id="conteudo" name="conteudo">
                </p>
                
                <p>
                    <input type="submit" name="consult_materias" value="Consultar">
                </p>
            </form>    
        </div>
        <div class="body" style="height: 80%;"></div>
    </body>    
</html>