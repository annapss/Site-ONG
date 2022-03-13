<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <?php $materia = $_REQUEST["materia"]; ?>
    <title><?=ucfirst($materia)?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../Index_and_css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
    <?php include '../../assets/xmenu.php';?>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="../../../Imagens_and_Icons/FundoPagMatematica.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption">
            <h1><?=ucfirst($materia)?></h1>
            <p>Tenha acesso aos nossos vídeos e resumos</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <h2 class="featurette-heading">Vídeos</h2>

    <!-- Three columns of text below the carousel -->

    <div class="py-3">
      <div class="row">
        <?php 
        $f = fopen("source_content/content.csv", "r"); #Abre o csv com  o conteudo
        $row = fgetcsv($f, 1000, ",");
        while($row){
          if($row[3] == 'video' && $row[4] == "$materia") #Filtra de acordo com o csv se é um video e se é da matéria desejada
            echo"
            <div class='col-lg-4'>
              <div class='card' style='width: 18rem;'>
                <!--<svg class='bd-placeholder-img card-img-top' width='100%' height='180' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%' fill='#dee2e6' dy='.3em'>Image cap</text></svg>-->
                <img src='../../../Imagens_and_icons/rosaMatematica.png' class='card-img-top' width='100%' height='180'>
                <div class='card-body'>
                  <h5 class='card-title'>$row[0]</h5>
                    <p class='card-text'>$row[1]</p>
                  <a href='video.php?link={$row[2]}&title={$row[0]}' class='btn btn-primary' role='button'>Assistir aula!</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            ";
          $row = fgetcsv($f, 1000, ",");
        }
        fclose($f);
        ?>
      </div><!-- /.row -->
    </div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider"> <!--Linha de divisao. Mias para frente pode ser útil-->
    
    <h2 class="featurette-heading">Resumos</h2>

    <!-- Three columns of text below the carousel -->

    <div class="py-3">
      <div class="row">
        <?php 
          $f = fopen("source_content/content.csv", "r");
          $row = fgetcsv($f, 1000, ",");
          while($row){
            if($row[3] == 'resumo' && $row[4] == "$materia")
              echo"
              <div class='col-lg-4'>
                <div class='card' style='width: 18rem;'>
                  <!--<svg class='bd-placeholder-img card-img-top' width='100%' height='180' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%' fill='#dee2e6' dy='.3em'>Image cap</text></svg>-->
                  <img src='../../../Imagens_and_icons/rosaMatematica.png' class='card-img-top' width='100%' height='180'>
                  <div class='card-body'>
                    <h5 class='card-title'>$row[0]</h5>
                      <p class='card-text'>$row[1]</p>
                    <a href='video.php?link={$row[2]}&title={$row[0]}' class='btn btn-primary' role='button'>Assistir aula!</a>
                  </div>
                </div>
              </div><!-- /.col-lg-4 -->
              ";
            $row = fgetcsv($f, 1000, ",");
          }
          fclose($f);
          ?>
      </div><!-- /.row -->
    </div>


    <hr class="featurette-divider">

    <h2 class="featurette-heading">Resumos Maiores</h2>

    <!-- Three columns of text below the carousel -->

    <div class="py-3">
      <div class="row">
        <?php 
          $f = fopen("source_content/content.csv", "r");
          $row = fgetcsv($f, 1000, ",");
          while($row){
            if($row[3] == 'resumoM' && $row[4] == "$materia")
              echo"
              <div class='col-lg-4'>
                <div class='card' style='width: 18rem;'>
                  <!--<svg class='bd-placeholder-img card-img-top' width='100%' height='180' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Image cap' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#868e96'></rect><text x='50%' y='50%' fill='#dee2e6' dy='.3em'>Image cap</text></svg>-->
                  <img src='../../../Imagens_and_icons/rosaMatematica.png' class='card-img-top' width='100%' height='180'>
                  <div class='card-body'>
                    <h5 class='card-title'>$row[0]</h5>
                      <p class='card-text'>$row[1]</p>
                    <a href='$row[2]' class='btn btn-primary' role='button'>Assistir aula!</a>
                  </div>
                </div>
              </div><!-- /.col-lg-4 -->
              ";
            $row = fgetcsv($f, 1000, ",");
          }
          fclose($f);
          ?>
      </div><!-- /.row -->
    </div>


    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Voltar ao topo</a></p>
    <p>&copy; 2018–2021 Grande A(l)titudes, Ong. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
