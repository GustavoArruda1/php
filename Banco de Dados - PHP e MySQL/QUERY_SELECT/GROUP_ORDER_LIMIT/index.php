<?php

    // Conecta ao banco de dados 'teste'
    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

    // Seleciona todos os clientes, agrupando por cargo, ordenando por ID decrescente e limitando a 3 resultados
    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY id DESC LIMIT 3");
    $sql->execute(); // Executa o comando SQL

    // Armazena todos os resultados em um array
    $info = $sql->fetchAll();

    // Percorre cada linha do resultado
    foreach($info as $value) {
        // Exibe o nome do cliente
        echo 'Nome: '.$value['nome'];
        echo '<br/>';
        // Exibe o ID do cliente (aqui está mostrando o ID, não o cargo)
        echo 'Cargo: '.$value['id'];
        echo '<hr/>'; // Linha separadora
    }

?>
