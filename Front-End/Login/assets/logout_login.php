<!-- Responsável pelo Logout das contas Codigo vitin-->
<?php
    session_start(); /*Parametro pro php entender que estamos em uma sessao da conta*/ 
    session_destroy(); /*Apaga a sessão Atual da Pessoa, transformando em um visitante do site*/
    header('Location: index.php'); /* Leva de volta a página inicial do site agr sem os beneficios de Cord ou Volu */
    exit();
?>