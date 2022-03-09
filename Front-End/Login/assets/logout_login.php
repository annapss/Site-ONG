<!-- Responsável pelo Logout das contas Codigo vitin-->
<?php
    session_start(); /*Parametro pro php entender que estamos em uma sessao da conta*/ 
    session_destroy(); /*Apaga a sessão atual da Pessoa, transformando em um visitante do site*/
    unset($_SESSION['email']);
    echo '<script type="text/javascript">
                alert("Usuário desconectado com sucesso.")
                window.location = "../../Index_and_css/index.php"
        </script>';    //header('Location: index.php');
         
        /* Leva de volta a página inicial do site agr sem os beneficios de Coordenador ou Voluntário*/
    exit();
?>