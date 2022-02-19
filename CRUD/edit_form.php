<html>
    
    <?php include 'C:\xampp\htdocs\Universo553-ONG\header.php';
        $nome = $_REQUEST['nome'];
        $telefone = $_REQUEST['telefone'];
        $email = $_REQUEST['email'];
    ?>

    <body style="background-color:blanchedalmond;">
        <div class="title">    
            <h1>Adicionar Tarefa</h1>
        </div>  
        <div class="body">  
            <form method="post" action="banco_atualiza.php">
                <p>
                <label for="nome">Nome:</label>
                <input type="text" size="40" name="nome" value="<?=$nome?>">
                </p>

                <p>
                <label for="email">Email:</label>
                <input type="text" size="40" name="email" value="<?=$email?>">
                </p>

                <p style="text-align: left;">    
                    <label for="senha">Senha: (Deixar vazio nao ira alterar a senha)</label>
                    <input type="text" size="40" name="senha">
                </p>

                <p>    
                    <label for="telefone">Telefone:</label>
                    <input type="text" size="40" name="telefone" value="<?=$telefone?>">
                </p>
                
                <p>
                    <input type="submit" value="Adicionar">
                </p>
            </form>    
        </div>
        <?php include 'C:\xampp\htdocs\Universo553-ONG\footer.php';?>
    </body>    
</html>
