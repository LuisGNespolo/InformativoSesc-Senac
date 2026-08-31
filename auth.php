<?php
require_once __DIR__ . '/../config/database.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function estaLogado(): bool
{
    return !empty($_SESSION['admin_id']);
}

function exigirLogin(): void
{
    if (!estaLogado()) {
        header('Location: login.php');
        exit;
    }
}

function fazerLogin(string $usuario, string $senha): bool
{
    $pdo = getConexao();
    $stmt = $pdo->prepare('SELECT id, usuario, senha_hash FROM admin_usuarios WHERE usuario = ? LIMIT 1');
    $stmt->execute([$usuario]);
    $conta = $stmt->fetch();

    if ($conta && password_verify($senha, $conta['senha_hash'])) {
        session_regenerate_id(true);
        $_SESSION['admin_id']      = $conta['id'];
        $_SESSION['admin_usuario'] = $conta['usuario'];
        return true;
    }

    return false;
}

function fazerLogout(): void
{
    $_SESSION = [];
    session_destroy();
}

function gerarCsrfToken(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validarCsrfToken(?string $token): bool
{
    return !empty($token) && !empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}