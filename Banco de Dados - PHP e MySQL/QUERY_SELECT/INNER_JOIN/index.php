<?php

    // Conecta ao banco de dados 'modulo_8'
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    // Busca todas as categorias existentes
    $sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();

    // Guarda o resultado em um array
    $info = $sql->fetchAll();

    // Percorre cada categoria
    foreach($info as $key => $value) {
        $categoria_id = $value['id'];

        // Mostra o nome da categoria atual
        echo 'Exibindo posts de:  '.$value['nome'];
        echo '<br/>';

        // Busca todos os posts que pertencem a essa categoria
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();

        // Guarda os posts encontrados
        $infoPosts = $sql->fetchAll();

        // Percorre e mostra cada post da categoria
        foreach($infoPosts as $key2 => $value2) {
            echo 'Titulo: '.$value2['titulo'];
            echo '<br/>';
            echo 'Conteudo: '.$value2['conteudo'];
            echo '<hr/>'; // linha separando os posts
        }
    }

    // Exemplo de consulta alternativa com INNER JOIN
    // $sql = $pdo->prepare("SELECT * FROM posts INNER JOIN `categorias` ON `posts`.categoria_id = `categorias`.id");
    //$sql->execute();
    //$info

?>
