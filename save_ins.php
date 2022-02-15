<?php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"]; 
    $participacao = ''; 
    $diho = '';
    $grau = $_POST["grau"]; #não está reconhecendo "grau"
    $materias = $_POST["materias"];
    $outros = $_POST["outros"];

    $i = 0;
    if(isset($_POST["parti"])){ #não está reconhecendo "parti"
        foreach($_POST["parti"] as $key => $value){
            if($i==0){ //se tiver mais de uma opcao selecionada, saber qual é a primeira
                $participacao .= "$value";
            }else{
                $participacao .= ",$value";
            }
            $i++;
        }
    }else{
        echo "Nenhuma opcao selecionada"; //para saber quando nenhuma checkbox foi selecionada
    }
   
    $x = 0
    if(isset($_POST["diho"])){
        foreach($_POST["diho"] as $key => $value){
            if($x ==0){  //se tiver mais de uma opcao selecionada, saber qual é a primeira
                $diho .= "$value";
            }
            $diho .= ",$value";
        }
    }else{
        $presencial = $_POST["presencial"];
        echo "Nenhuma opcao selecionada"; //para saber quando nenhuma checkbox foi selecionada
        
    }
   
    file_put_contents("ins.csv", "$nome; $telefone; $participacao; $diho; $grau; $presencial; $materias; $outros\n", FILE_APPEND );

    dd($_POST);

    function dd($param) //funcao pra ver o que post tá pegando
    {
        echo '<pre>';
        print_r($param);
        echo '</pre>';
        die();
    };

 
    
  
  
    
?>