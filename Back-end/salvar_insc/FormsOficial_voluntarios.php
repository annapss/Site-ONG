<!doctype html>
<!--forms para inscricao-->
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Formulário de Inscrição</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    
    <!-- Bootstrap core CSS -->
    <link href="../../Front-End/assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
  <link href="../../Front-End/Index_and_css/carousel.css" rel="stylesheet">
  </head>
  <body>

  <?php include '../../Front-End/assets/xmenu.php';?>
   

<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="../../Imagens_and_Icons/FundoPagVoluntario.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
        <div class="container">
          <div class="carousel-caption">
            <h1>Seja Voluntário</h1>
            <p>Aqui você se inscreve para fazer parte da nossa ONG!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->


<form action="assets/save_ins.php" method="post">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-12">
        <div class="mb-3">
          <label for="id_nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="id_nome" name="nome">
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-5">
        <div class="mb-3">
          <label for="id_telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="id_telefone" name="telefone">
        </div>
      </div>
      <div class="col-md-7">
        <div class="mb-3">
          <label for="id_escolaridade"  class="form-label">Grau de Escolaridade</label>
          <select class="form-select form-select mb-3"  aria-label=".form-select-sm example" name="grau" id="id_escolaridade">
            <option>Selecione uma opção</option>
            <option  value="Ensino Fundamental Incompleto" >Ensino Fundamental Incompleto</option>
            <option  value="Ensino Fundamental Completo" >Ensino Fundamental Completo</option>
            <option  value="Ensino Fundamental Completo" >Ensino Médio Incompleto</option>
            <option  value="Ensino Medio Completo" >Ensino Médio Completo</option>
            <option  value="Ensino Superior Incompleto" >Ensino Superior Incompleto</option>
            <option  value="Ensino Superior Completo" >Ensino Superior Completo</option>
            <option  value="Pós Graduacao" >Pós Graduação</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-5">
        <div class="mb-3">
          <label class="form-label">Pretende participar de qual maneira?</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parti[]" value="Aulas Online"  id="id_participacao_aulas">
            <label class="form-check-label"  for="id_participacao_aulas">
              Aulas Online
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parti[]" value="Aulas Presenciais" id="id_participacao_aulas" >
            <label class="form-check-label"  for="id_participacao_aulas">
              Aulas Presenciais
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parti[]" value="Produzir Reels-TikTok" id="id_participacao_aulas" >
            <label class="form-check-label"   for="id_participacao_aulas">
              Produzir Reels/TikTok
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parti[]" value="Enviar Resumos" id="id_participacao_aulas" >
            <label class="form-check-label"  for="id_participacao_aulas">
              Enviar Resumos
            </label>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="mb-3">
          <label class="form-label">Caso tenha selecionado a opção " Aulas Presenciais" na questão anterior, informe qual(is) turma(s) gostaria de participar:</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox"name="diho[]"  value="Terça Feira-14:40 até 16:40" id="id_horario_presencial" >
            <label class="form-check-label"  for="id_horario_presencial">
              Terça Feira - de 14:40 até 16:40
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="diho[]" value="Quinta Feira-16:00 até 16:50" id="id_horario_presencial" >
            <label class="form-check-label"  for="id_horario_presencial">
              Quinta Feira - de 16:00 até 16:50
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="diho[]" value="Sexta Feira-11:10 até 12:00" id="id_horario_presencial" >
            <label class="form-check-label"  for="id_horario_presencial">
              Sexta Feira - de 11:10 até 12:00
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="diho[]"  value="Sexta Feira-de 15:50 até 16:40" id="id_horario_presencial" >
            <label class="form-check-label"  for="id_horario_presencial">
              Sexta Feira - de 15:50 até 16:40
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md">
        <div class="mb-3">
          <label for="id_horarios_adicionais" class="form-label">Caso tenha selecionado a opção " Aulas Presenciais" e não possui disponibilidade de horário para as turmas atuais, qual seria um bom dia e horário? (obs: É possível sugerir um horário mesmo tendo selecionado uma turma)(obs2: Vamos avaliar os horários quando retornamos as atividades presenciais).</label>
          <textarea class="form-control" id="id_horarios_adicionais" name="presencial" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="id_materias_interesse" class="form-label">Qual(is) Matéria(s) você está interessado em ensinar? </label>
          <textarea class="form-control" id="id_materias_interesse" name="materias" rows="3"></textarea>
        </div>
      </div>
      <div class="mb-3">
          <label for="id_outros" class="form-label">Outros</label>
          <textarea class="form-control" name="outros" id="id_outros" rows="3"></textarea>
        </div>
      <div class="mb-3">
          <button type="submit" class="btn btn-primary"name="enviar">Enviar</button>
    </div>
      </div>
    </div>
  </div> 

    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider"> <!--Linha de divisao. Mais para frente pode ser util-->
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Voltar ao topo</a></p>
    <p>&copy; 2018–2021 Grande A(l)titudes, Ong. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      
  </body>
</form>
</html>
