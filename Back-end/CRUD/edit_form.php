<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php include 'C:\xampp\htdocs\Site_ONG\Front-End\assets\xmenu.php';
            $nome = $_REQUEST['nome'];
            $telefone = $_REQUEST['telefone'];
            $email = $_REQUEST['email'];
        ?>
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
    </head>
    <body style="background-color:blanchedalmond;">
        <div class="body contornar" style="background-color: #73cee3;">
            <br><br><br>
            <h1>Crud</h1>
        </div>
        <div class="body" style="height: 100%;">  
            <form method="post" action="banco_atualiza.php">
                <p>
                    <label for="nome">Nome:</label><br>
                    <input type="text" size="40" name="nome" value="<?=$nome?>">
                </p>

                <p>
                    <label for="email">Email:</label><br>
                    <input type="text" size="40" name="email" value="<?=$email?>">
                </p>

                <p>    
                    <label for="senha">Senha: (Deixar vazio nao ira alterar a senha)</label><br>
                    <input type="text" size="40" name="senha">
                </p>

                <p>    
                    <label for="telefone">Telefone:</label><br>
                    <input type="text" size="40" name="telefone" value="<?=$telefone?>">
                </p>
                
                <p>
                    <input type="submit" value="Editar">
                </p>
            </form>    
        </div>
    </body>    
</html>
