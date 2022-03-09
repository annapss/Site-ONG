<?php 
    $user_name = $_REQUEST["user_name"];
    $user_email = $_REQUEST["user_email"];
    $user_number = $_REQUEST["user_number"];
    $user_funcao = $_REQUEST["user_funcao"];
    $user_pass = sha1($_REQUEST["user_pass"]);

    include '../../../Back-End/banco/conecta_banco.php';

    $link = conexao();
    

    $sql = "INSERT INTO grandes_altitudes.login VALUES ('$user_email', '$user_pass', '$user_funcao')";
    $query = mysqli_query($link, $sql);

    if($user_funcao == "voluntario"){
        $sql = "INSERT INTO grandes_altitudes.voluntario VALUES ('$user_name', '$user_number', '$user_email')";
        $query = mysqli_query($link, $sql);

    }elseif($user_funcao == "coordenador"){
        $sql = "INSERT INTO grandes_altitudes.coordenador VALUES ('$user_name', '$user_number', '$user_email')";
        $query = mysqli_query($link, $sql);
    }

    if($query)
        echo '<script>alert("Conta criada!");location.href="../login.php";</script>';
    else
        echo mysqli_error($link);

?>