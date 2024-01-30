<?php

include 'conexao.php';

if (isset($_POST['acao'])){
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $erro = 0;

    
    if(empty($rua) or strstr($rua, ' ') == false){
        header('location: index.php?erro=1');
        $erro = 1;
    }
    
    if (empty($bairro) or strstr($bairro, ' ') == false) {
        header('location: index.php?erro=2');
        $erro = 1;
     }
    
     if (empty($cidade) or strstr($cidade, ' ') == false) {
        header('location: index.php?erro=3');
        $erro = 1;
    }

    
    $verifica = preg_match('/[A-Z]{2}$/', $estado);

    if ($verifica != true) {
        header('location: index.php?erro=4');
        $erro = 1;
    }
 
    if($erro == 0){
       
        $sql = $pdo->prepare("INSERT INTO localidade (cep, rua, numero, bairro, cidade, estado) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($cep,$rua,$numero,$bairro,$cidade,$estado));
        print("Tudo certo");
    }

}