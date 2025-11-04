<?php

    // Cria a conexão com o banco de dados 'modulo_8'
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    // Prepara um comando SQL para buscar todos os dados da tabela 'posts'
    $sql = $pdo->prepare("SELECT * FROM posts");

    // Executa o comando preparado acima
    $sql->execute();

    // Pega todos os resultados e guarda dentro do array $info
    $info = $sql->fetchAll();

    // Percorre cada linha do resultado, uma por uma
    foreach($info as $key => $value) {
        // Mostra o título do post atual
        echo 'Titulo: '.$value['titulo'];
        echo '<br/>'; // quebra de linha
        // Mostra o conteúdo do post atual
        echo 'Conteudo: '.$value['conteudo'];
        echo '<hr/>'; // linha horizontal pra separar os posts
    }

    /*
    // Esse trecho faz a mesma coisa que o foreach, mas usando um laço for
    for($i = 0; $i < count($info); $i++) {
        echo 'Titulo: '.$info[$i]['titulo'];
        echo '<br/>';
        echo 'Conteudo: '.$info[$i]['conteudo'];
        echo '<hr/>';
    }
    */

    /*
    // Aqui mostraria todo o conteúdo do array $info, apenas pra ver como ele é
    echo '<pre>';
    print_r($info);
    echo '</pre>';
    */
?>
