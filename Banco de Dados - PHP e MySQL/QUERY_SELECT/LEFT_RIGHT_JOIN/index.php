<?php
    // Conecta ao banco de dados 'teste'
    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

    // LEFT JOIN: mostra todos os clientes,
    // mesmo que alguns não tenham cargo associado
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");

    // RIGHT JOIN: mostraria todos os cargos,
    // mesmo que não tenham clientes associados
    //$sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");

    // INNER JOIN: traria apenas os clientes que realmente têm cargo
    //$sql = $pdo->prepare("SELECT * FROM `clientes` INNER JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");

    // Executa a consulta selecionada acima
    $sql->execute();

    // Guarda os resultados retornados
    $info = $sql->fetchAll();

    // Percorre cada linha dos dados obtidos
    foreach($info as $value) {
        // Exibe o nome do cliente (pode vir vazio dependendo do tipo de JOIN)
        echo 'Nome: '.$value['nome'];
        echo '<br/>';
        // Mostra o ID — cuidado: pode ser o ID do cliente ou do cargo
        echo 'Cargo: '.$value['id'];
        echo '<br/>';
        // Mostra o nome do cargo vinculado
        echo 'Nome do cargo: '.$value['nome_cargo'];
        echo '<hr/>'; // separa visualmente cada registro
    }
?>
