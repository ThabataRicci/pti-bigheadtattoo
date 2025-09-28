<?php
// 1. Inicia a sessão e inclui a conexão com o banco
session_start();
require_once '../includes/conexao.php';

// 2. Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. Pega os dados do formulário
    $email = trim($_POST['email']);
    $senha_digitada = trim($_POST['senha']);

    if (empty($email) || empty($senha_digitada)) {
        header("location: login.php?erro=1");
        exit();
    }

    // 4. Prepara a consulta SQL para buscar o usuário pelo e-mail
    // Selecionamos o id, nome, a SENHA (hash) e o perfil
    $sql = "SELECT id, nome, senha, perfil FROM usuarios WHERE email = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    // 5. Verifica se encontrou um usuário
    if ($stmt->rowCount() == 1) {
        $usuario = $stmt->fetch(); // Pega os dados do usuário

        // 6. VERIFICA A SENHA
        // Compara a senha digitada com o hash salvo no banco de dados
        if (password_verify($senha_digitada, $usuario['senha'])) {

            // 7. LOGIN BEM-SUCEDIDO!
            session_regenerate_id(true); // Medida de segurança

            // Armazena os dados do usuário na sessão
            $_SESSION['loggedin'] = true;
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['nome_usuario'] = $usuario['nome'];
            $_SESSION['user_role'] = $usuario['perfil'];

            // 8. Redireciona o usuário com base no seu perfil
            if ($usuario['perfil'] == 'artista') {
                header("location: ../pages/dashboard-artista.php");
            } else {
                header("location: ../pages/dashboard-cliente.php");
            }
            exit();
        } else {
            // Senha incorreta
            header("location: ../pages/login.php?erro=1");
            exit();
        }
    } else {
        // E-mail não encontrado
        header("location: ../pages/login.php?erro=1");
        exit();
    }
} else {
    // Se alguém tentar acessar o arquivo diretamente, redireciona
    header("location: ../pages/login.php");
    exit();
}
