<?php
    // Cria uma conexão com o banco de dados 'teste'
    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

    // Prepara uma consulta que busca todos os clientes cujo nome contém a letra 'g'
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE '%g%'");

    // Executa a consulta no banco
    $sql->execute();

    // Armazena todos os resultados da busca em um array
    $nome = $sql->fetchAll();

    // Percorre cada linha retornada e exibe os dados na tela
    foreach($nome as $key => $value){
        echo "ID: ".$value['id']."<br>";
        echo "Nome: ".$value['nome']."<br>";
        echo "----------------------<br>";
    }
?>
