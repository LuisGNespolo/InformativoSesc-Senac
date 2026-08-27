<?php
require_once "conexao.php";

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $senhaCriptografada = password_hash(
        $senha,
        PASSWORD_DEFAULT
    );

    try {

        $sql = "INSERT INTO usuarios
                (nome, sobrenome, email, senha)
                VALUES
                (:nome, :sobrenome, :email, :senha)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ":nome" => $nome,
            ":sobrenome" => $sobrenome,
            ":email" => $email,
            ":senha" => $senhaCriptografada
        ]);

        $mensagem = "Cadastro realizado com sucesso!";

    } catch (PDOException $erro) {

        $mensagem = "Este email já está cadastrado.";

    }
}
?>