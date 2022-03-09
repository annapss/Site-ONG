<!doctype html>

<!-- Area do voluntario -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Conta Voluntário</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    <?php include 'menuContas.php' ?>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Área do Voluntário</span>
          </h6>
            <a class="nav-link active" aria-current="page" href="conta.php">
              <span data-feather="home"></span>
              Página Inicial
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../Back-End/consulta_material_volu/consult_material_index.php">
              <span data-feather="search"></span>
              Consulta de materiais
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../Back-End/inserir_material_volun/insert_material_index.php">
              <span data-feather="edit"></span>
              Adicionar novo conteúdo
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">Seja bem-vindo a área do voluntário</h1>
      </div>
      
      <div class="px-2 mt-14">
        <h5 class="font-bold text-2xl text-left mb-1">Vejamos algumas Orientações de como funciona o portal dos Voluntários:</h5>
        <p class="text-gray-1000 text-sm text-left"><ul>
            <li><b>Como Funciona:</b></li>
            <li><b>Consultar Material:</b> </li>
            <li><b>Adicionar Material:</b></li>
        <!--<li><b>Adicionar depoimento:</b></li>-->
            <li><b>Normas de <i><a href="###.php">conduta voluntário:</b></i>
            </ul></p>
        <div class="w-full flex justify-center pt-4 pb-4">
        </div>
      </div>
      
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
