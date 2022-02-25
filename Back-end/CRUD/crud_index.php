<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
        <?php include 'C:\xampp\htdocs\Site_ONG\Front-End\assets\xmenu.php'; /* Lindinho capaz de substituir o header s2 */ ?> 
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
            <?php include 'assets\banco_lista.php';?>
        </div>
    </body>
</html>