<?php
    // Constantes com as informações do banco de dados
    define('HOST', 'localhost');
    define('DBNAME', 'modulo_8');
    define('USER', 'root');
    define('PASS', ''); 

    try {
        // Cria uma nova conexão com o banco usando PDO
        $pdo = new PDO(
            'mysql:host=' . HOST . ';dbname=' . DBNAME, // Endereço e nome do banco
            USER,                                       // Usuário do banco
            PASS,                                       // Senha do banco
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") // Define o padrão de caracteres
        );

        // Configura o PDO para lançar exceções em caso de erro
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {
        // Caso ocorra um erro na conexão, essa parte será executada
        echo 'Erro ao conectar ao banco de dados.';
    }
?>
