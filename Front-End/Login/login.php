<!doctype html>
<html lang="pt-br"><head>

    <meta charset="utf-8">
    <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* login FORM */

        #logreg-forms{
            width: 412px;
            margin:10vh auto;
            background-color:#f3f3f3;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        }
        #logreg-forms form {
            width: 100%;
            max-width: 410px;
            padding: 15px;
            margin: auto;
        }
        #logreg-forms .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        #logreg-forms .form-control:focus { z-index: 2; }
        #logreg-forms .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        #logreg-forms .form-signin input[type="password"] {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        #logreg-forms .social-login{
            width:390px;
            margin:0 auto;
            margin-bottom: 14px;
        }
        #logreg-forms .social-btn{
            font-weight: 100;
            color:white;
            width:190px;
            font-size: 0.9rem;
        }

        #logreg-forms a{
            display: block;
            padding-top:10px;
            color:lightseagreen;
        }

        #logreg-form .lines{
            width:200px;
            border:1px solid red;
        }


        #logreg-forms button[type="submit"]{ margin-top:10px; }

        #logreg-forms .facebook-btn{  background-color:#3C589C; }

        #logreg-forms .google-btn{ background-color: #DF4B3B; }

        #logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }

        #logreg-forms .form-signup .social-btn{ width:210px; }

        #logreg-forms .form-signup input { margin-bottom: 2px;}

        .form-signup .social-login{
            width: 210px !important;
            margin: 0 auto;
        }

        /* Mobile */

        @media screen and (max-width:500px){
            #logreg-forms{
                width:300px;
            }
            
            #logreg-forms  .social-login{
                width:200px;
                margin:0 auto;
                margin-bottom: 10px;
            }
            #logreg-forms  .social-btn{
                font-size: 1.3rem;
                font-weight: 100;
                color:white;
                width:200px;
                height: 56px;
                
            }
            #logreg-forms .social-btn:nth-child(1){
                margin-bottom: 5px;
            }
            #logreg-forms .social-btn span{
                display: none;
            }
            #logreg-forms  .facebook-btn:after{
                content:'Facebook';
            }
        
            #logreg-forms  .google-btn:after{
                content:'Google+';
            }
            
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        function backindex(){
            location.href = "../Index_and_css/index.php";
        }
        function testpassword(theForm) {
            if (theForm.user_pass.value != theForm.user_repeatpass.value)
            {
                alert('Senhas diferentes!');
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <div id="bg-color"></div>

    <div id="logreg-forms">
        <form class="form-signin" action="assets/start_session.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Login </h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Entre com o Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Entre com o Google+</span> </button>
            </div>
            <p style="text-align:center"> OU  </p>
            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="E-mail ou Telefone" required="" autofocus="">
            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Senha" required="">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            <a href="#" id="forgot_pswd">Esqueceu sua Senha?</a>
            <hr>
            
            <!-- <p> Cadastro </p>  -->
            
            <button class="btn btn-primary btn-block" type="button" id="btn-signup" onclick="testpassword()"><i class="fas fa-user-plus"></i> Criar uma Conta</button>
            <button class="btn btn-secondary btn-block" type="button" id="btn-back" onclick="backindex()">Voltar a tela inicial</button>
        </form>

        <form action="/reset/password/" class="form-reset" style="display: none;">
            <input type="email" id="resetEmail" class="form-control" placeholder="E-mail ou Telefone" required="" autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Alterar Senha</button>
            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Voltar</a>
        </form>
            
        <form action="assets/create_account.php" method="post" onsubmit="return testpassword(this);" class="form-signup">
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Entre com o Facebook</span> </button>
            </div>
            <div class="social-login">
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Entre com o Google+</span> </button>
            </div>
            
            <p style="text-align:center">OU</p>

            <input type="text" id="user-name" name="user_name" class="form-control" placeholder="Nome Completo" required="" autofocus="">
            <input type="email" id="user-email" name="user_email" class="form-control" placeholder="E-mail" required="" autofocus="">
            <input type="tel" id="user-number" name="user_number" class="form-control" placeholder="Telefone" required="" autofocus="">
            <input type="password" id="user-pass" name="user_pass" class="form-control" placeholder="Senha" required="" autofocus="">
            <input type="password" id="user-repeatpass" name="user_repeatpass" class="form-control" placeholder="Repetir Senha" required="" autofocus="">
            <select class="form-control" aria-label=".form-select-sm example" name="user_funcao" id="user-funcao" required="" autofocus="">
                <option>Selecione sua função</option>
                <option  value="voluntario" >Voluntário</option>
                <option  value="coordenador" >Coordenador</option>
            </select>
            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i>Cadastrar</button>
            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Voltar</a>
        
        </form>
        <br>
            
    </div>
    <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}
function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}
$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:black"></a>
    </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>


<script type="text/javascript">
function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})
</script>


</body></html>

