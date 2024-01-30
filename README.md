# Search-by-zip-code
 System made with PHP and AJAX with MySQL database where by zip code you can find any address showing all available data and being able to register in the database to facilitate your query.

- conexao.php connects to the database using the pdo method

- consultar_cep.php where to make the api request through the simplexml_load_file() function and get the necessary data for the system
- enviando-ao-banco.php where to send the data captured by the api and send it to the database
- ver-dados.php shows all the data about the zip codes you registered in the database
