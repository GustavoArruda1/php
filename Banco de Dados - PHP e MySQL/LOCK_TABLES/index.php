<?php
    // Cria uma conexão com o banco de dados 'teste' no servidor local
    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

    // Bloqueia a tabela 'clientes' para escrita (nenhuma outra conexão pode acessá-la)
    $pdo->exec("LOCK TABLES `clientes` WRITE");

    // Mantém o bloqueio ativo por 10 segundos antes de liberar automaticamente
    sleep(10);
?>
