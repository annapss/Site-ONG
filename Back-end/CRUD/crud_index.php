<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
        <link rel="stylesheet" href="../assets/css/site.css">
    </head>
    <style>
        .body{
            margin: 0% 5% 0% 5%;
        }
    </style>
    <body>
        <div class="body contornar" style="background-color: #73cee3;">
            <h1>Crud</h1>
        </div>
        <div class="body">  
            <p>
                <a class="btn btn-primary" href="../../Front-End/pag_perfil_vol_coord/contaCoor.php" role="button">Voltar ao perfil</a>
            </p>
            <div class="container-sm">
            <?php include 'assets\banco_lista.php';?>
            </div>
        </div>
        <div class="body" style="height: 80%;"></div>
    </body>
</html>