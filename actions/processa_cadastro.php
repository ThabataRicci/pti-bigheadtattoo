<?php
// arquivo de conexão com o banco de dados
require_once '../includes/conexao.php';

// ver se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // pegar os dados do formulário
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $senha = trim($_POST['senha']);

    // verificar se campos não estão vazios
    if (empty($nome) || empty($email) || empty($telefone) || empty($senha)) {
        // redireciona de volta com uma mensagem de erro (vamos implementar a msg depois)
        header("location: ../pages/cadastro.php?erro=campos_vazios");
        exit();
    }

    // 4. CRIPTOGRAFA A SENHA 
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // prepara a consulta SQL para inserir os dados, usamos ? para evitar SQL Injection
    $sql = "INSERT INTO usuarios (nome, email, senha, telefone, perfil, data_cadastro) VALUES (?, ?, ?, ?, 'cliente', NOW())";

    $stmt = $pdo->prepare($sql);

    // tenta executar a consulta
    try {
        $stmt->execute([$nome, $email, $senha_hash, $telefone]);

        // redireciona para a página de login com uma mensagem de sucesso
        header("location: ../pages/login.php?status=cadastrado");
        exit();
    } catch (PDOException $e) {
        // se der erro (ex: e-mail duplicado), redireciona com uma mensagem de erro
        // código '23000' é o código padrão para erro de chave duplicada (email único)
        if ($e->getCode() == '23000') {
            header("location: ../pages/cadastro.php?erro=email_existente");
        } else {
            // Outro erro de banco de dados
            die("ERRO: Não foi possível executar a consulta. " . $e->getMessage());
        }
    }
} else {
    // se alguém tentar acessar o arquivo diretamente, redireciona para a página de cadastro
    header("location: ../pages/cadastro.php");
    exit();
}
