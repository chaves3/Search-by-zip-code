<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Lato:wght@900&family=Montserrat+Alternates:ital,wght@1,300&family=Oswald:wght@200;400;600&family=Playfair+Display&family=Roboto+Mono:wght@500&family=Roboto+Serif:opsz,wght@8..144,100&family=Roboto:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image-x/png" href="images/cep.png">
    <link rel="stylesheet" href="css/style.css">
    <title>CEP Ajax</title>
</head>
<body>

            <h2>Preenchimento automático do CEP</h2>
            <form id="form1" class="form1"  method="post" action="enviando-ao-banco.php">
        <fieldset>
            <legend>Localidade</legend>
            <div>
                <label>CEP:</label><br>
                <input type="text" name="cep" id="cep">
                <input type="button" name="acao" value="Buscar">
            </div>
            <div>
            <br>
                <label>Rua:</label><br />
                <input type="text" name="rua" id="rua" />
                <?php if (isset($_GET['erro']) && $_GET['erro'] == 1) { ?>
                    <h5 style="color: red;">Nome da RUA não inserido</h5>
               <?php } ?>    
            
			
            </div>
            <div>
            <br>
            <label>Número:</label><br>
                <input type="text" name="numero" id="numero">
            </div>
            <div>
                <br>
                <label>Bairro:</label><br>
                <input type="text" name="bairro" id="bairro">
                <?php if (isset($_GET['erro']) && $_GET['erro'] == 2) { ?>
                    <h5 style="color: red;">Nome do BAIRRO não inserido</h5>
               <?php } ?>  
            </div>
            <div>
            <br>
                <label>Cidade:</label><br>
                <input type="text" name="cidade" id="cidade">
                <?php if (isset($_GET['erro']) && $_GET['erro'] == 3) { ?>
                    <h5 style="color: red;">Nome da CIDADE não inserido</h5>
               <?php } ?>  
            </div>
            <div>
            <br>
                <label>Estado:</label><br>
                <input type="text" name="estado" id="estado">
                <?php if (isset($_GET['erro']) && $_GET['erro'] == 4) { ?>
                    <h5 style="color: red;">ESTADO não inserido</h5>
               <?php } ?>
            </div>
    <div>
       <input type="submit" name="acao" id="">
    </div>
     
        </fieldset>
    </form>



<script src="js/jquery.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/cep.js"></script>
</body>
</html>