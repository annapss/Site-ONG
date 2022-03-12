<?php
//arquivo que salva insricao

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"]; 
    $participacao = ''; 
    $diho = '';
    $grau = $_POST["grau"];
    $materias = $_POST["materias"];

    if (isset($_POST["outros"])){

        $outros = $_POST["outros"];

    }

    $i = 0;

    if(isset($_POST["parti"])){ 

        foreach($_POST["parti"] as $key => $value){

            if($i==0){ //se tiver mais de uma opcao selecionada, saber qual é a primeira
                $participacao .= "$value";
            }else{
                $participacao .= " e $value";
            }

            $i++;
        }
    }else{
        echo '<script type="text/javascript">
                    alert("Nenhuma opção selecionada.")
                    window.location = "../FormsOficial_voluntarios.php"
              </script>'; //para saber quando nenhuma checkbox foi selecionada
    }
   
    $a = 0;
    $x = 0;

    if(isset($_POST["diho"])){

        foreach($_POST["diho"] as $key => $value){

            if($x ==0){  //se tiver mais de uma opcao selecionada, saber qual é a primeira
                $diho .= "$value";
            }else{
                $diho .= " e $value";
            }
            
            $x++;
        }
    }else{

        $presencial = $_POST["presencial"];
        $a++;
        echo '<script type="text/javascript">
                    alert("Nenhuma opção selecionada.")
                    window.location = "../FormsOficial_voluntarios.php"
               </script>'; //para saber quando nenhuma checkbox foi selecionada
    }
   
    if($a == 1){ //se a pessoa não preencher a checkbox "diaho" e preencher a textarea "presencial" 
            
    file_put_contents("insc.csv", "$nome; $telefone; $participacao; $diho; $grau; $presencial; $materias; $outros\n", FILE_APPEND );
    } 
    else{ // preencheu a checkbox "diaho", então não precisou preencher a textarea "presnecial"
        file_put_contents("insc.csv", "$nome; $telefone; $participacao; $diho; $grau; ;$materias; $outros\n", FILE_APPEND );
    }

    // Apenas para verificar o se o POST está pegando todos os inputs corretamente
    dd($_POST);

    function dd($param) //funcao pra ver o que post tá pegando
    {
        //echo '<pre>';
        //print_r($param);
        //echo '</pre>';
        //die();
        echo '<script type="text/javascript">
                    alert("Inscrição Enviada com Sucesso!")
                    window.location = "../../../Front-End/Index_and_css/index.php"
        </script>';
    };
 
?>
