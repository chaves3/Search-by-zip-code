
<?php
include 'conexao.php';
$sql = $pdo->prepare("SELECT * FROM localidade");
$sql->execute();
$consultas = $sql->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>CEPS</title>
</head>
<body>
<header>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-text">
     <a class="voltar" href="index.php">Voltar</a>
    </span>
  </div>
</nav>
</header>    
<br><br>
<div class="container">
    <table class="table">
       <thead>
        <tr>
            <th>CEP</th>
            <th>RUA</th>
            <th>NÚMERO</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
        </tr>
        </thead>
        
        <?php foreach($consultas as $key){ ?>
        <tbody>
            <tr>
                <td><?php print($key['cep']);?></td>
                <td><?php print($key['rua']);?></td>
                <td><?php print($key['numero']);?></td>
                <td><?php print($key['bairro']);?></td>
                <td><?php print($key['cidade']);?></td>
                <td><?php print($key['estado']);?></td>
            </tr>
        </tbody>
        <?php }?>
    </table>
</div><!--container-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>