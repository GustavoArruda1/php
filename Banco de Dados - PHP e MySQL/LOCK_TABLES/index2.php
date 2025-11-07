<?php

    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM `clientes`");

    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach($clientes as $value) {
        echo 'Nome: '.$value['nome'];
        echo '<br/>';
        echo 'Numero do cargo: '.$value['cargo'];
        echo '<hr/>';
    }
?>