<?php  
    $numerosEsc = array($_POST['valor1'],$_POST['valor2'],$_POST['valor3'],$_POST['valor4'],$_POST['valor5']);
    $maiorNum = 0;

    for($i = 0; $i < count($numerosEsc); $i++){
        if(empty($numerosEsc[$i])){
            echo "Digite um número";
        }
        if($numerosEsc[$i] >= $maiorNum){
            $maiorNum = $numerosEsc[$i];
        }
        else{
            $menorNum = $numerosEsc[$i];
        }
    }

    echo "O maior número é: $maiorNum <br>";
    echo "O menor número é: $menorNum";
?>