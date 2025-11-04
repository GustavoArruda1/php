<?php
// Define o fuso horário para São Paulo
date_default_timezone_set('America/Sao_Paulo');

// Cria a conexão com o banco de dados 'modulo_8'
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

// Verifica se o formulário foi enviado
if (isset($_POST['acao'])) {

    // Pega os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    // Gera a data e hora atuais no formato do MySQL
    $momento_registro = date('Y-m-d H:i:s');

    // Prepara o comando SQL para inserir os dados
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");

    // Executa o comando passando os valores
    $sql->execute(array($nome, $sobrenome, $momento_registro));

    // Mostra mensagem se deu certo
    echo 'Cliente inserido com sucesso';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no Banco de Dados</title>
</head>
<body>
    <!-- Formulário para cadastrar o cliente -->
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="sobrenome" placeholder="Sobrenome" required>
        <!-- O campo de data é gerado automaticamente no PHP -->
        <input type="submit" name="acao" value="Cadastrar">
    </form>
</body>
</html>
