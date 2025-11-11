<?php
    // Conecta ao banco de dados 'teste' usando o usuário root e sem senha
    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

    // Cria o comando SQL para gerar a tabela 'cursos'
    $sql = 'CREATE TABLE cursos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  -- campo ID (chave primária e auto incremento)
        nome VARCHAR(30) NOT NULL                       -- campo nome, obrigatório, com até 30 caracteres
    )';

    // Executa o comando SQL e cria a tabela no banco
    $pdo->exec($sql);
?>
