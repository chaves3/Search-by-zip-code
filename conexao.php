<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=cadastro_equipamentos', 'root', '');
//Modo de desenvolvimento
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Modo de produção, não colocar nada.
}catch(Exception $e){
    print $e->getMessage();
    print "Não foi possivel conectar tente mais tarde por favooooorrrrrrrrrrrrrrr";
}
