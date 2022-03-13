<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php
            $nome = $_REQUEST['nome'];
            $telefone = $_REQUEST['telefone'];
            $email = $_REQUEST['email'];
        ?>
        <link rel="stylesheet" href="../assets/css/site.css">
    </head>
    <body>
        <div class="body contornar" style="background-color: #73cee3;">
            <h1>Crud</h1>
        </div>
        <div class="body">  
            <form method="post" action="assets/banco_atualiza.php">
                <p>
                    <label for="nome">Nome:</label>
                    <div class="text-box">
                        <input type="text" name="nome" value="<?=$nome?>" class="form-control form-control-sm">
                    </div>
                </p>

                <p>
                    <label for="email">Email:</label><br>
                    <div class="text-box">
                        <input type="text" name="email" value="<?=$email?>" class="form-control form-control-sm">
                    </div>
                </p>

                <p>    
                    <label for="senha">Senha: (Deixar vazio nao ira alterar a senha)</label><br>
                    <div class="text-box">
                        <input type="text" name="senha" class="form-control form-control-sm">
                    </div>
                </p>

                <p>    
                    <label for="telefone">Telefone:</label><br>
                    <div class="text-box">
                        <input type="text" name="telefone" value="<?=$telefone?>" class="form-control form-control-sm">
                    </div>
                </p>
                
                <p>
                    <input type="submit" value="Editar" class="btn btn-primary mb-3">
                </p>

                <p>
                    <a class="btn btn-primary" href="crud_index.php" role="button">Voltar</a> 
                </p>
            </form>    
        </div>
        <div class="body" style="height: 80%;"></div>
    </body>    
</html>
