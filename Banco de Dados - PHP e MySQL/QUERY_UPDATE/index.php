<?php

    // Cria a conexão com o banco de dados 'modulo_8'
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    // Define o ID do cliente que será atualizado
    $id = 5;

    // Prepara o comando SQL para atualizar o nome e sobrenome do cliente com o ID informado
    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Mario', sobrenome='Da Silva' WHERE id=$id");

    // Executa o comando e verifica se deu certo
    if($sql->execute()) {
        echo 'meu cliente foi atualizado com sucesso';
    }

?>
