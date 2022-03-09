<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
        <!--php include 'C:\xampp\htdocs\Site-ONG\Front-End\assets\xmenu.php';-->
        <link rel="stylesheet" href="../assets/css/site.css">
        <title>Inserir Material</title>
    </head>
    <body>
        <div class="body contornar" style="background-color: #73cee3;">
            <h1>Materiais Feitos</h1>
        </div>
        <div class="body">  
            <?php include 'assets/consulta_material.php';?>
            <p>
                <a class="btn btn-primary" href="consult_material_index.php" role="button">Voltar</a>
            </p>
        </div>
        <div class="body" style="height: 80%;"></div>
    </body>
</html>