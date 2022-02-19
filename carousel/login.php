<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.225rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 68px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    html,
    body {
      height: 100%;
      zoom: 1.3;
    }



    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    body,
    html {
      background-image: url(https://images2.alphacoders.com/584/584010.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
    }

    .form-signin {
      width: 300px;
      max-width: 450px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="username"] {
      margin-bottom: 2px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .form-signin input[type="email"] {
      margin-bottom: 3px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      margin-top: 3px;
    }

    .form-signin input[type="password"] {
      margin-bottom: 3px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      margin-top: 4px;
    }

    .checkbox1 {
      transform: scale(1.1);
      padding: 20px;
      margin-bottom: -20px;
      margin-top: -20px;
      ;
    }


    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .footer1 {
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      background-color: #c5c5c5;
      font-size: 15px;
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .rounded-4 {
      border-radius: .5rem;
    }

    .rounded-5 {
      border-radius: .75rem;
    }

    .rounded-6 {
      border-radius: 1rem;
    }

    .modal-sheet .modal-dialog {
      width: 380px;
      transition: bottom .75s ease-in-out;
    }

    .modal-sheet .modal-footer {
      padding-bottom: 2rem;
    }

    .modal-alert .modal-dialog {
      width: 380px;
    }

    .border-right {
      border-right: 1px solid #eee;
    }

    .modal-tour .modal-dialog {
      width: 380px;
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="login.css" rel="stylesheet">
</head>

<body class="text-center">


  <main class="form-signin">
    <form method="post" action="validação.php">
      <img class="mb-4" src="logo.png" alt="" width="132" height="97">
      <h1 class="h3 mb-4 fw-normal">Por Favor, entre para continuar </h1>
      <div class="form-floating">
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email:</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="senha" placeholder="Password">
        <label for="floatingPassword">Senha: </label>
        <small class="text-muted">Ao clicar em Cadastre-se, você concorda com os termos de uso.</small>
        <hr class="my-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="Lembre-me" id="flexCheckIndeterminate">
          <label class="form-check-label" for="flexCheckIndeterminate">
            Lembre-me
          </label>
        </div>
      
        <input class="btn btn-primary" type="submit" value="Submit">
      <p>Segue lá nas redes sociais. <br>Mais trabalhos em breve em: <a
          href="https://github.com/VegaCenturion">VegaCenturion</a></p>
    </form>
  </main>

</body>

</html>