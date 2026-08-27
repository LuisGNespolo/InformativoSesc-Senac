<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $tipo = $_POST["tipo"];
    $mensagem = $_POST["mensagem"];

    try {

        $sql = "INSERT INTO inscricoes 
                (nome, sobrenome, email, tipo, mensagem)
                VALUES
                (:nome, :sobrenome, :email, :tipo, :mensagem)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":mensagem", $mensagem);

        $stmt->execute();

        header("Location: index.php?sucesso=1");
        exit;

    } catch (PDOException $erro) {

        echo "Erro ao salvar os dados: " . $erro->getMessage();

    }

}