<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
<table class="table table-dark table-striped center" style="width: 100%;">
	<?php
		//incluir o .php que contecta no bd, checar se ta no diretorio correto!!!!
		include 'C:\xampp\htdocs\Site_ONG\Back-end\banco\conecta_banco.php'; #Mudar ao sair do beta

		/* enviando a consulta para o banco de dados */
        $sql = "select * from  grandes_altitudes.Login AS L INNER JOIN  grandes_altitudes.Voluntario AS V ON (V.Email = L.Email)";
		$resposta = mysqli_query($link, $sql);
        if($resposta)
		{
			/* deu certo!! mostar o resultado */
			/* pega a primeira linha */
			$row = mysqli_fetch_assoc($resposta);
			echo "
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Senha (hash)</th>
					<th>Opções</th>
                </tr>
                ";
			while($row)
			{
				/* resposta array associativo - 
				os "indices" são os nomes das colunas */
				$nome = $row['Nome'];
				$telefone = $row['Telefone'];
                $email = $row['Email'];
				$senha = $row['Senha'];
				
				echo "<tr>
                        <td>$nome</td>
                        <td>$telefone</td>
                        <td>$email</td>
                        <td>$senha</td>
                        <td><a href='banco_delete.php?email={$email}'>Delete</a>
                        <br><a href='edit_form.php?email={$email}&nome={$nome}&telefone={$telefone}&senha={$senha}'>Edit</a>
                        </td>
                    </tr>";
				/* pega a proxima row */
				$row = mysqli_fetch_assoc($resposta);
			}
		}
		else
		{
			/* erro ao executar a consulta */
			echo mysqli_error($link);
		}

		/* fecha a conexão */
		mysqli_close($link);
	?>
</table>