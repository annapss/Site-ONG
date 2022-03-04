<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php include 'C:\xampp\htdocs\Site_ONG\Front-End\assets\xmenu.php';
            $nome = $_REQUEST['nome'];
            $telefone = $_REQUEST['telefone'];
            $email = $_REQUEST['email'];
        ?>
        <link rel="stylesheet" href="assets\crud.css">
    </head>
    <body>
        <div class="body contornar" style="background-color: #73cee3;">
            <br><br><br>
            <h1>Crud</h1>
        </div>
        <div class="body" style="height: 100%;">  
            <form method="post" action="assets/banco_atualiza.php">
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
