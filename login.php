<?php

session_start();

require_once "conexao.php";

$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":email" => $email
    ]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario["senha"])) {

        $_SESSION["usuario_id"] = $usuario["id"];

        $_SESSION["usuario_nome"] = $usuario["nome"];

        $_SESSION["usuario_email"] = $usuario["email"];

        header("Location: index.php");

        exit;

    } else {

        $erro = "Email ou senha incorretos.";

    }
}

?>