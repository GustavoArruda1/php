<?php

    // Cria a conexão com o banco de dados 'modulo_8'
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

    // ID do cliente que será deletado
    $id = 6;

    // OR = "ou" / AND = "e" — usados em condições SQL
    // Exemplo: WHERE nome='Gustavo' OR nome='Lucas'

    // Prepara o comando SQL com um espaço reservado (?) para o valor
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

    // Executa o comando passando o valor real do ID
    if($sql->execute(array($id))) {
        echo 'meu cliente foi deletado com sucesso';
    }

?>
