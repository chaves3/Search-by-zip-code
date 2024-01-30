# Search-by-zip-code
 System made with PHP and AJAX with MySQL database where by zip code you can find any address showing all available data and being able to register in the database to facilitate your query.
- index.php where the ajax request shows the data coming from the api through the js/cep.js file
- js/jquery.js to use jquery
- js/jquery.mask.js plugin to validate input name="numero" coming from index.php
- js/cep.js where you make the ajax request with jquery sending the data that will be filled in by the values ​​coming from the api in the consulta_cep.php file
- conexao.php connects to the database using the pdo method
- consultar_cep.php where to make the api request through the simplexml_load_file() function and get the necessary data for the system.
- enviando-ao-banco.php where to send the data captured by the api and send it to the database.
- ver-dados.php shows all the data about the zip codes you registered in the database.
